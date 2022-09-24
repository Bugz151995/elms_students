<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;
use App\Validation\SigninRules;

class Validation extends BaseConfig
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
        SigninRules::class
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
    public $signin_rules = [
        'username' => [
            'rules' => 'required|user_exists[username]',
            'errors' => [
                'user_exists' => 'Oops! username not found.'
            ]
        ],
        'password' => [
            'rules' => 'required|password_matches[username, password]',
            'errors' => [
                'password_matches' => 'Oh no! Incorrect password.',
                // 'login_attempt' => 'Max login attempt has been reached, try again later.'
            ]
        ]
    ];

    public $signup_rules = [
        'fname' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'The first name field is required,'
            ]
        ],
        'mname' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'The middle name field is required,'
            ]
        ],
        'lname' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'The last name field is required,'
            ]
        ],
        'class' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'The class field is required,'
            ]
        ],
        'username' => [
            'rules' => 'required|is_unique[account_tbl.username]',
            'errors' => [
                'is_unique' => 'Sorry, the username is taken.'
            ]
        ],
        'password' => [
            'rules' => 'required|matches[password_conf]',
            'errors' => [
                'matches' => 'The password does not match.'
            ]
        ],
        'password_conf' => [
            'rules' => 'required|matches[password]',
            'errors' => [
                'matches' => 'The password does not match.'
            ]
        ],
    ];
}
