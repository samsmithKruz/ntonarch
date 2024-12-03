function previewImage(event) {
    const file = event.target.files[0];
    const parentElement = event.target.closest('.input');
    let previewElement = parentElement.querySelector('.img-preview');
    
    // Check if a file is selected
    if (file) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            // If an image preview doesn't exist, create and append it
            if (!previewElement) {
                previewElement = document.createElement('img');
                previewElement.classList.add('img-preview');
                previewElement.style = "width: auto; height: 142px; margin-top: 0.5rem; object-fit:contain; align-self: flex-start";
                parentElement.appendChild(previewElement);
            }
            // Set the image source to the file reader result (base64 data URL)
            previewElement.src = e.target.result;
        }
        
        // Read the file as a data URL
        reader.readAsDataURL(file);
    }
}
