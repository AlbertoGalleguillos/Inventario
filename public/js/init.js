var elem = document.querySelector('.sidenav');
var instance = M.Sidenav.init(elem);
var elem = document.querySelector('.tooltipped');
var instance = M.Tooltip.init(elem);

var Toast = (message) => { 
    M.toast({html: message});
}