const Domain = "http://" + window.location.host
    // JavaScript for Search Bar Interactivity
async function getactivemember() {
    const active = await fetch("https://discord.com/api/guilds/881961550267691048/widget.json")
    const json = await active.json();
    document.getElementById('active_member').innerText = json.presence_count + " Online"

}

// service section
document.addEventListener('DOMContentLoaded', function() {
    getactivemember()
    if (
        document.getElementById('searchButton')
    ) {
        document.getElementById('searchButton').addEventListener('click', function() {
            const query = document.getElementById('searchInput').value;
            if (query.trim() === "") {
                alert('Please enter a search term.');
            } else {
                alert(`Searching for: "${query}"`);
                // Add your search functionality here
            }
        });
    }


    const courseItems = document.querySelectorAll('.ag-courses_item');

    courseItems.forEach(item => {
        const bg = item.querySelector('.ag-courses-item_bg');

        item.addEventListener('mouseenter', () => {
            bg.style.transform = 'scale(10)';
        });

        item.addEventListener('mouseleave', () => {
            bg.style.transform = 'scale(1)';
        });
    });
});
// service section ENd