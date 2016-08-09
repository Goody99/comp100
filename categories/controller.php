<?php

  // start our session to avoid headers issue
  session_start();

  /* ACTION HANDLER */
  // attach PHP ActiveRecord
  require_once $_SERVER['DOCUMENT_ROOT'] . '/lab3/examples/config.php';

  /* VIEWS */
  // index
  function index () {
    $categories = Category::all(array('order'=>'name'));
    ob_start();
    include 'views/index.php';
    $output = ob_get_contents();
    ob_end_clean();
    return $output;
    
  }

  // show
  function show ( $get ) {
    
  }


  // create
  function create () {
    ob_start();
    include 'views/create.php';
    $output = ob_get_contents();
    ob_end_clean();
    return $output;
  }


  // edit
  function edit ( $get ) {

    if(isset($get['id'])&&category::exists($get['id'])) {
      $categories = Category::find(array('first',$get['id']));
      ob_start();
      include 'views/create.php';
      $output = ob_get_contents();
      ob_end_clean();
      return $output;
    }else {
      $_SESSION['fail']="You must select a category";
      header('Location: index.php?action=index');
      exit;
    }
  }


  /* PROCESSES */
  // add
// add
function add ( $post ) {
  // create a new record
  $category = new Category;

  // assign the values
  $category->name = $post['name'];

  // when we save, we apply our assigned properties and write them to the database
  $category->save();

  // redirect if there is an error
  if ( $category->is_invalid() ) {
    // set the fail messages
    $_SESSION['fail'][] = $category->errors->full_messages();
    $_SESSION['fail'][] = 'The category could not be created.';

    // redirect
    header( 'Location: index.php?action=create' );
    exit;
  }

  // set the success message
  $_SESSION['success'] = 'Category was created successfully.';
  header( 'Location: index.php?action=index' );
  exit;
}


  // update
  function update ( $post ) {
    
  }


  // delete
  function delete ( $post ) {
    
  }


  /* Authentication Block */


  // action handler for REQUEST
if(isset($request['action']) && in-array($_REQUEST['action'],['add','update','delete','index','show','create','edit'])){
  
  $yield = call_user_func($_REQUEST['action'],$_REQUEST);
}