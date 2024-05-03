
function view(){
    var result = confirm('Are you sure to view the data');
    window.location.href = 'fetch.php';
}

function back(){
    var backurl = confirm('Are you sure to back to webpage')
    window.location.href = 'webpage.html';
}