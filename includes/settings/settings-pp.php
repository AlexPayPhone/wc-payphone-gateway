<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (!defined('ABSPATH')) {
    exit;
}

return apply_filters('woocommerce_payphone_settings', array(
    'enabled' => array(
        'title' => __('Enable/Disable', 'payphone'),
        'type' => 'checkbox',
        'label' => __('Enable PayPhone Payment Module.', 'payphone'),
        'default' => 'no',
        'description' => __('Show payphone in the Payment List as a payment option', 'payphone')
    ),   
    'description' => array(
        'title' => __('Description:', 'payphone'),
        'type' => 'textarea',
        'default' => __('Use your Visa and Mastercard credit or debit cards from any bank, and if you have the Payphone app, use your Payphone balance.', 'payphone'),
        'description' => __('This controls the description which the user sees during checkout.', 'payphone'),
        'desc_tip' => true
    ),
    'token' => array(
        'title' => __('Authorization Token:', 'payphone'),
        'type' => 'textarea',
        'description' => __('Given by payphone', 'payphone'),
        'desc_tip' => true
    ),
    'storeId' => array(
        'title' => __('Store Id:', 'payphone'),
        'type' => 'text',
        'description' => __('Given by payphone', 'payphone'),
        'desc_tip' => true
    ),
    'redirect_page_success_id' => array(
        'title' => __('Return Success Page', 'payphone'),
        'type' => 'select',
        'options' => wc_gateway_payphone()->get_pages(__('Select Page', 'payphone')),
        'description' => __('URL of success page', 'payphone'),
        'desc_tip' => true
    ),
    'redirect_page_decline_id' => array(
        'title' => __('Return Decline Page', 'payphone'),
        'type' => 'select',
        'options' => wc_gateway_payphone()->get_pages(__('Select Page', 'payphone')),
        'description' => __('URL of declined page', 'payphone'),
        'desc_tip' => true
    )));
