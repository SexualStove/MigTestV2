<?php

// =============================================================================
// FUNCTIONS/BARS/MODULES/TP-WC-CART-MODAL.PHP
// -----------------------------------------------------------------------------
// Bar module definitions.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Define Element
//   02. Builder Setup
//   03. Register Element
// =============================================================================

// Define Element
// =============================================================================

$data = array(
  'title'  => __( 'Cart Modal', '__x__' ),
  'values' => array_merge(
    x_values_anchor( x_bar_module_settings_anchor( 'cart-toggle' ) ),
    x_values_modal(),
    x_values_cart(),
    x_values_anchor( x_bar_module_settings_anchor( 'cart-button' ) ),
    x_values_omega()
  ),
);



// Builder Setup
// =============================================================================

function x_element_builder_setup_tp_wc_cart_modal() {
  return array(
    'control_groups' => array_merge(
      x_control_groups_anchor( x_bar_module_settings_anchor( 'cart-toggle' ) ),
      x_control_groups_modal(),
      x_control_groups_cart(),
      x_control_groups_anchor( x_bar_module_settings_anchor( 'cart-button' ) ),
      x_control_groups_omega()
    ),
    'controls' => array_merge(
      x_controls_anchor( x_bar_module_settings_anchor( 'cart-toggle' ) ),
      x_controls_modal(),
      x_controls_cart(),
      x_controls_anchor( x_bar_module_settings_anchor( 'cart-button' ) ),
      x_controls_omega()
    ),
    'active' => X_WOOCOMMERCE_IS_ACTIVE
  );
}



// Register Module
// =============================================================================

cornerstone_register_element( 'tp-wc-cart-modal', x_bar_element_base( $data ) );
