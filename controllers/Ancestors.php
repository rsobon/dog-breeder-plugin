<?php namespace AzylAlfa\Dogbreeder\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Ancestors extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'dogs' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('AzylAlfa.Dogbreeder', 'dogs', 'ancestors');
    }
}