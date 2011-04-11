<?php
// $Id: node.tpl.php,v 1.10 2009/11/02 17:42:27 johnalbin Exp $

/**
 * @file
 * Theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: Node body or teaser depending on $teaser flag.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $terms: the themed list of taxonomy term links output from theme_links().
 * - $display_submitted: whether submission information should be displayed.
 * - $links: Themed links like "Read more", "Add new comment", etc. output
 *   from theme_links().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 *   The following applies only to viewers who are registered users:
 *   - node-by-viewer: Node is authored by the user currently viewing the page.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $build_mode: Build mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $build_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * The following variables are deprecated and will be removed in Drupal 7:
 * - $picture: This variable has been renamed $user_picture in Drupal 7.
 * - $submitted: Themed submission information output from
 *   theme_node_submitted().
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see zen_preprocess()
 * @see zen_preprocess_node()
 * @see zen_process()
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix">
  <?php print $user_picture; ?>

  <?php if (!$page): ?>
    <h2 class="title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>

  <?php if ($unpublished): ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>

  <?php if ($display_submitted || $terms): ?>
    <div class="meta">
      <?php if ($display_submitted): ?>
        <span class="submitted">
          <?php
            print t('Submitted by !username on !datetime',
              array('!username' => $name, '!datetime' => $date));
          ?>
        </span>
      <?php endif; ?>

      <?php if ($terms): ?>
        <div class="terms terms-inline"><?php print $terms; ?></div>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <div class="content">
    <table border='1'>
<tr><td colspan='4' align="center"><h3>Primary Contact Person</h3></td></tr>
<tr><td colspan="4">
 <b>Name</b>: <?php print $node->field_flight_contact_title['0']['value'].' '.$node->field_flight_contact_firstname['0']['value'].' '.
 $node->field_flight_contact_middlename['0']['value'].' '.$node->field_flight_contact_lastname['0']['value']; ?> <br />
 <b>Email</b>: <?php print $node->field_flight_contact_email['0']['value']; ?> <br />
 <b>Phone</b>: <?php print $node->field_flight_contact_mobile['0']['value']; ?> <br />
</td></tr>
<tr><td colspan='4' align="center"><h3>List of Passengers</h3></td></tr>
<tr><td colspan='4' height="3px"><h4>Adults</h4></td></tr>
<tr><td>#</td><td><b>Name</b></td><td><b>Sex</b></td><td><b>Age</b></td></tr>
<?php 
for ($adult_index = 0; $adult_index < 5; $adult_index++ ) { ?>
<?php if(!empty($node->field_flight_adult_title[$adult_index]['value'])) { ?> 
<tr>
<td><?php print $adult_index+1; ?></td>
<td><?php print $node->field_flight_adult_title[$adult_index]['value'].' '.$node->field_flight_adult_firstname[$adult_index]['value'].' '.$node->field_flight_adult_middlename[$adult_index]['value'].' '.$node->field_flight_adult_lastname[$adult_index]['value']; ?></td>
<td><?php if($node->field_flight_adult_title[$adult_index]['value'] == 'Mr') { echo 'Male';  } else { echo 'Female'; }?></td>
<td><?php print $node->field_flight_adult_age[$adult_index]['value'];?></td>
</tr>
<?php }//if notempty
} ?>

<tr><td colspan='4'><h4>Childrens</h4></td></tr>
<?php 
for ($children_index = 0; $children_index < 4; $children_index++ ) { ?>
<?php if(!empty($node->field_flight_children_title[$children_index]['value'])) { ?> 
<tr>
<td><?php print $children_index+1; ?></td>
<td><?php print $node->field_flight_children_title[$children_index]['value'].' '.$node->field_flight_children_firstname[$children_index]['value'].' '.$node->field_flight_children_middlename[$children_index]['value'].' '.$node->field_flight_children_lastname[$children_index]['value']; ?></td>
<td><?php if($node->field_flight_children_title[$children_index]['value'] == 'Master') { echo 'Male';  } else { echo 'Female'; }?></td>
<td><?php print $node->field_flight_children_age[$children_index]['value'];?></td>
</tr>
<?php }//if notempty
} ?>


<tr><td colspan='4'><h4>Infants</h4></td></tr>
<?php 
for ($infants_index = 0; $infants_index < 2; $infants_index++ ) { ?>
<?php if(!empty($node->field_flight_infant_firstname[$infants_index]['value'])) { ?> 
<tr>
<td><?php print $infants_index+1; ?></td>
<td><?php print $node->field_flight_infant_title[$infants_index]['value'].' '.$node->field_flight_infant_firstname[$infants_index]['value'].' '.$node->field_flight_infant_middlename[$infants_index]['value'].' '.$node->field_flight_infant_lastname[$infants_index]['value']; ?></td>
<td><?php if($node->field_flight_infant_title[$infants_index]['value'] == 'Master') { echo 'Male';  } else { echo 'Female'; }?></td>
<td><?php print $node->field_flight_infant_age[$infants_index]['value'];?></td>
</tr>
<?php }//if notempty
} ?>

<tr><td colspan='4' align="center"><h3>Journey Details</h3></td></tr>
<tr><td colspan="4">
 <b>Leaving From</b>: <?php print $node->field_flight_journey_from['0']['value']; ?> <br />
 <b>Going To</b>: <?php print $node->field_flight_journey_to['0']['value']; ?> <br />
 <b>Departure Date</b>: <?php print $node->field_flight_journey_dept_date['0']['value']; ?> <br />
</td></tr>
</table>
<?php
$sessionID = $node->field_flight_sessionid['0']['value'];
if(isset($sessionID)) {
$query = db_query("SELECT onward_flight_info,return_flight_info,searchkey FROM {flights_selected} WHERE search_sessionID = '%s'", $sessionID);   
$row = db_fetch_array($query);  // this returns the row as an array, use db_fetch_object to get an object
//echo '<pre>';
//print_r($row);//['onward_flight_info'];
//$info = unserialize($row['onward_flight_info']);
//print_r($info);
//$arrayString=unserialize($str);
//$array = unserialize($arrayString); 
//print $arrayString;
//print_r($arrayString);
//echo '</pre>';
} ?>
<table border='1'>
<tr><td></td><td><b>Airline</b></td><td><b>Departure</b></td><td><b>Arrival</b></td></tr>
<?php if(!empty($row['onward_flight_info'])) {
  if (strpos($row['onward_flight_info'], '&$&') !== false) { 
    $onward_linked_flight_details = explode('&$&',$row['onward_flight_info']);
    for($onward_index=0; $onward_index < count($onward_linked_flight_details); $onward_index++) {
      $onward_info = explode('!!', $onward_linked_flight_details[$onward_index]);?>
      <tr>
      <td>Onward flight info</td>
      <td><?php print $onward_info['0'].'<br />'.$onward_info['1'].'-'.$onward_info['2'];?> </td>
      <td><?php print $onward_info['3'].'<br />'.$onward_info['5'];?> </td>
      <td><?php print $onward_info['4'].'<br />'.$onward_info['6'];?> </td>
      </tr>    
  <?php }  
  }
  else {
    $onward_info = explode('!!', $row['onward_flight_info']); ?>
      <tr>
      <td>Onward flight info</td>
      <td><?php print $onward_info['0'].'<br />'.$onward_info['1'].'-'.$onward_info['2'];?> </td>
      <td><?php print $onward_info['3'].'<br />'.$onward_info['5'];?> </td>
      <td><?php print $onward_info['4'].'<br />'.$onward_info['6'];?> </td>
      </tr>
  <?php }
}
if(!empty($row['return_flight_info'])) {
  if (strpos($row['return_flight_info'], '&$&') !== false) { 
    $return_linked_flight_details = explode('&$&',$row['return_flight_info']);
    for($return_index=0; $return_index < count($return_linked_flight_details); $return_index++) {
      $return_info = explode('!!', $return_linked_flight_details[$return_index]);?>
      <tr>
      <td>Return flight info</td>
      <td><?php print $return_info['0'].'<br />'.$return_info['1'].'-'.$return_info['2'];?> </td>
      <td><?php print $return_info['3'].'<br />'.$return_info['5'];?> </td>
      <td><?php print $return_info['4'].'<br />'.$return_info['6'];?> </td>
      </tr>    
  <?php }  
  }
  else {
    $return_info = explode('!!', $row['return_flight_info']); ?>
      <tr>
      <td>Return flight info</td>
      <td><?php print $return_info['0'].'<br />'.$return_info['1'].'-'.$return_info['2'];?> </td>
      <td><?php print $return_info['3'].'<br />'.$return_info['5'];?> </td>
      <td><?php print $return_info['4'].'<br />'.$return_info['6'];?> </td>
      </tr>
  <?php }
}
?>
</table>
<?php //print $content; ?>
</div>

  <?php print $links; ?>
</div> <!-- /.node -->
