function slide(chosen) {
  $('div[name|="menu"]').each(function(index) {
      if ($(this).attr("id") == chosen) {
	   $(this).slideDown(0);
      }
      else {
	   $(this).slideUp(0);
      }
 });
}