document.querySelectorAll(".share").forEach(btn => {
    btn.addEventListener("click", async (e) => {
        e.preventDefault();
        await share(btn)

    })
    btn.addEventListener("touchstart", async (e) => {
        e.preventDefault();
        await share(btn)

    })
})
let share = async (btn) => {
    if (navigator.share) {
        try {
            return await navigator.share({
                title: btn.dataset.title,
                text: btn.dataset.text,
                url: btn.dataset.url,
            })
        } catch (e) {
            return console.warn(e)
        }
    }else{
        alert("Sharing not enabled");
    }
    console.warn("Share unsupported")
}