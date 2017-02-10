function AudioNameFunction()
  {
    var suggest = document.getElementById('audio_name').value;
    document.getElementById('audio_name_display').value=suggest;
  }

  function DateReleaseFunction()
  {
    var suggest = document.getElementById('date_released').value;
    document.getElementById('date_released_display').value=suggest;
  }

  function RecordLabelFunction()
  {
    var suggest = document.getElementById('record_label').value;
    document.getElementById('record_label_display').value=suggest;
  }

  function minutesFunction()
  {
    var suggest = document.getElementById('audio_minutes').value;
    document.getElementById('display_minutes').value=suggest;
  }

  function secondsFunction()
  {
    var suggest = document.getElementById('audio_seconds').value;
    document.getElementById('display_seconds').value=suggest;
  }

  function FeatureArtistFunction()
  {
    var suggest = document.getElementById('ft_name').value;
    document.getElementById('ft_name_dis').value=suggest;
  }

  function FeatureArtistEmail()
  {
    var suggest = document.getElementById('ft_email').value;
    document.getElementById('ft_email_dis').value=suggest;
  }

   function FeatureArtistNumber()
  {
    var suggest = document.getElementById('ft_no').value;
    document.getElementById('ft_no_dis').value=suggest;
  }


  function Details(){
    var AudioName = document.getElementById('audio_name_display').value;
    var RecordLabel = document.getElementById('record_label_display').value;
    var DateReleased = document.getElementById('date_released_display').value;
    var Minutes = document.getElementById('display_minutes').value;
    var Seconds = document.getElementById('display_seconds').value;
    var featName= document.getElementbyId('ft_name_dis').value;
    var featEmail= document.getElementbyId('ft_email_dis').value;
    var featNo= document.getElementbyId('ft_no_dis').value;
  }