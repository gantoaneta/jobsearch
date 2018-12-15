function changeurl(url)
{
    var new_url="../content/"+url;
    window.history.pushState("data","Title",new_url);
    document.title=url;
}

$("#login").click(function () {
    $('#reg').removeClass('active');
    $('#login').addClass('active');
    changeurl('login.html');
})

$("#reg").click(function () {
    $('#login').removeClass('active');
    $('#reg').addClass('active');
   // $('#fieldCand').load('content/register.html');
    changeurl('register.html');
})
