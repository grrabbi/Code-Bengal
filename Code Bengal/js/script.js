const Domain = "http://" + window.location.host
    // JavaScript for Search Bar Interactivity
document.getElementById('searchButton').addEventListener('click', function() {
    const query = document.getElementById('searchInput').value;
    if (query.trim() === "") {
        alert('Please enter a search term.');
    } else {
        alert(`Searching for: "${query}"`);
        // Add your search functionality here
    }
});


async function getactivemember() {
    const active = await fetch("https://discord.com/api/guilds/881961550267691048/widget.json")
    const json = await active.json();
    document.getElementById('active_member').innerText = json.presence_count + " Online"

}
getactivemember()
for (let i = 0; i < document.getElementsByClassName('element-box').length; i++) {

    document.getElementsByClassName('element-box')[i].addEventListener('click', () => {
        window.open(Domain + "/element-page.html", "_blank")
    })

}