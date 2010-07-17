Drupal.behaviors.ddk_job = function() {
  var $title = jQuery("#edit-title"), $position = jQuery("#edit-field-job-position-0-value"), $companyName = jQuery("#edit-locations-0-name");
  var changeFunction = function() {
    if (!$title.hasClass('prestine')) {
      var dynamicTitle = Drupal.t('@company seaks @position', {'@company': $companyName.val(), '@position': $position.val()});
      $title.val(dynamicTitle);
    }
    else {
      $position.add($companyName).unbind('change', changeFunction);
    }
  };
  if ($title.val() !== '') {
    $title.addClass('prestine');
  }
  else {
    $position.add($companyName).change(changeFunction);
    if ($position.val() !== '' || $companyName.val() !== '') {
      changeFunction();
    }
  } 
}