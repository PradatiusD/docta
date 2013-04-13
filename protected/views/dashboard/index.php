<?php
/* @var $this DashboardController */

$this->breadcrumbs=array(
	'Dashboard',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>
 <div class="row">
    <div class="large-12 columns">
	<table>
              <thead>
          <tr>
            <th colspan="5">Your Queue</th>
          </tr>
        </thead>
    <tbody>
      <tr>
        <td>Name</td>
        <td>Number</td>
        <td>Date</td>
        <td>Time</td>
      </tr>
     <tr>
      <td>Michealangelo</td>
      <td><a href="#">(305)555-4444</a></td>
      <td>April 13th</td>
      <td>12:30pm</td>
      <td><a href="#">Call to click</a></td>
     </tr>
     <tr>
      <td>Michealangelo</td>
      <td><a href="#">(305)555-4444</a></td>
      <td>April 13th</td>
      <td>12:30pm</td>
      <td><a href="#">Call to click</a></td>
     </tr>
     <tr>
      <td>Michealangelo</td>
      <td><a href="#">(305)555-4444</a></td>
      <td>April 13th</td>
      <td>12:30pm</td>
      <td><a href="#">Call to click</a></td>
     </tr>
     <tr>
      <td>Michealangelo</td>
      <td><a href="#">(305)555-4444</a></td>
      <td>April 13th</td>
      <td>12:30pm</td>
      <td><a href="#">Call to click</a></td>
     </tr>
    </tbody>
	</table>
      <hr>
  <!-- Second Band (Image Left with Text) -->
  <div class="row">
    <div class="large-12 columns">
  <table>
    <td>
          <thead>
          <tr>
            <th colspan="2">Your Appointments</th>
            <th colspan="2"><a href="JavaScript:void(0)" data-reveal-id="newAppt">Add Patient</a></th>
          </tr>
        </thead>
    </td>
    <tbody>
      <td>Name</td>
      <td>Number</td>
      <td>Date</td>
      <td>Time</td>
     </td>
     <tr>
      <td>Michealangelo</td>
      <td><a href="#">(305)555-4444</a></td>
      <td>April 13th</td>
      <td>12:30pm</td>
     </tr>
     <tr>
      <td>Michealangelo</td>
      <td><a href="#">(305)555-4444</a></td>
      <td>April 13th</td>
      <td>12:30pm</td>
     </tr>
     <tr>
      <td>Michealangelo</td>
      <td><a href="#">(305)555-4444</a></td>
      <td>April 13th</td>
      <td>12:30pm</td>
     </tr>
     <tr>
      <td>Michealangelo</td>
      <td><a href="#">(305)555-4444</a></td>
      <td>April 13th</td>
      <td>12:30pm</td>
     </tr>
    </tbody>
  </table>
    </div>
  </div>
 <hr>
  <!-- Third Band (Image Right with Text) -->
   <div class="row">
    <div class="large-12 columns">
      <table>
          <thead>
          <tr>
            <th>Patient List</th>
            <th><a href="JavaScript:void(0)" data-reveal-id="newPatient">Add Patient</a></th>
          </tr>
        </thead>
        <tbody>
          <td>Name</td>
          <td>Number</td>
         <tr>
          <td>Michealangelo</td>
          <td><a href="#">(305)555-4444</a></td>
         </tr>
         <tr>
          <td>Michealangelo</td>
          <td><a href="#">(305)555-4444</a></td>
         </tr>
         <tr>
          <td>Michealangelo</td>
          <td><a href="#">(305)555-4444</a></td>
         </tr>
         <tr>
          <td>Michealangelo</td>
          <td><a href="#">(305)555-4444</a></td>
         </tr>
        </tbody>
      </table>
    </div>
  </div>
 
  <!-- Footer -->

  <footer class="row">
    <div class="large-12 columns">
      <hr />
      <div class="row">
        <div class="large-6 columns">
          <p>&copy; Copyright no one at all. Go to town.</p>
        </div>
        <div class="large-6 columns">
          <ul class="inline-list right">
            <li><a href="JavaScript:void(0)" data-reveal-id="newPatient">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
            <li><a href="#">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
<!-- Modal for New Patient --> 
<div id="newPatient" class="reveal-modal small">
        <form action="">
          <h2>New Patient</h2>
          <input type="text" placeholder="Name">
          <input type="text" placeholder="Phone number">
          <input type="submit" value="Add Patient" class="button">
      </form>
  <a class="close-reveal-modal">&#215;</a>
</div>


<!-- Modal for New Appoitnment -->
<div id="newAppt" class="reveal-modal small">
        <form action="">
          <h2>New Appoitnment</h2>
        <a href="#" data-dropdown="drop1" class="button" >Get Patient</a>
        <ul id="drop1" class="f-dropdown" data-dropdown-content style="top:0">
          <li><a href="#">Patient 1</a></li>
          <li><a href="#">Patient 2</a></li>
          <li><a href="#">Patient 3</a></li>
        </ul>
          <input type="text" placeholder="Date">
          <input type="text" placeholder="Time">
          <input type="submit" value="Add Appointment" class="button">
      </form>
  <a class="close-reveal-modal">&#215;</a>
</div>
<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>
