//scroll script by Empty Soul
// only links (a) 
//v 1.2

$(document).ready(function()
{

$("a").on('click', function(event){

if (this.hash !== "")
{

event.preventDefault();

var hash = this.hash;

$('html, body').animate({

scrollTop: $(hash).offset().top

},800, function()
{
window.location.hash = hash;
});

}
});

});
