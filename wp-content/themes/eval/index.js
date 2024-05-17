(function getLocation() {
    let location = document.getElementById('dynamicLocation')
    if (location) {
        fetch('https://ipapi.co/8.8.8.8/json/')
        .then(function(response) {
        response.json().then(jsonData => {
            location.innerHTML = jsonData.city
        });
        })
        .catch(function(error) {
            console.log(error)
        });
    }
})();