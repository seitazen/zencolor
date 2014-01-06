<?php

function themeConfig($form) {

$analytics = new Typecho_Widget_Helper_Form_Element_Textarea('analytics', NULL, NULL, _t('analytics code'), _t(''));
    $form->addInput($analytics);
  

$ads = new Typecho_Widget_Helper_Form_Element_Textarea('ads', NULL, NULL, _t('ads code'), _t(''));
    $form->addInput($ads);
  
  
 $twitter = new Typecho_Widget_Helper_Form_Element_Text('twitter', NULL, NULL, _t('twitter 地址'), _t(''));
    $form->addInput($twitter);

 $github = new Typecho_Widget_Helper_Form_Element_Text('github', NULL, NULL, _t('github 地址'), _t(''));
    $form->addInput($github);

 $feed = new Typecho_Widget_Helper_Form_Element_Text('feed', NULL, NULL, _t('feed 地址'), _t(''));
    $form->addInput($feed);

 $weibo = new Typecho_Widget_Helper_Form_Element_Text('weibo', NULL, NULL, _t('weibo 地址'), _t(''));
    $form->addInput($weibo);


    
   
}


/*
function themeFields($layout) {

$analytics = new Typecho_Widget_Helper_Form_Element_Text('analytics', NULL, NULL, _t('analytics code'), _t(''));
    $form->addInput($analytics);
  

$ads = new Typecho_Widget_Helper_Form_Element_Text('ads', NULL, NULL, _t('ads code'), _t(''));
    $form->addInput($ads);
  

$twitter = new Typecho_Widget_Helper_Form_Element_Text('twitter', NULL, NULL, _t('twitter 地址'), _t(''));
    $form->addInput($twitter);

 $github = new Typecho_Widget_Helper_Form_Element_Text('github', NULL, NULL, _t('github 地址'), _t(''));
    $form->addInput($github);

 $feed = new Typecho_Widget_Helper_Form_Element_Text('feed', NULL, NULL, _t('feed 地址'), _t(''));
    $form->addInput($feed);

 $weibo = new Typecho_Widget_Helper_Form_Element_Text('weibo', NULL, NULL, _t('weibo 地址'), _t(''));
    $form->addInput($weibo);
}
*/

