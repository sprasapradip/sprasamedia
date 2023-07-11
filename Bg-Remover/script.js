const imageUpload = document.getElementById('image-upload');
const removeBackgroundBtn = document.getElementById('remove-background-btn');
const originalImage = document.getElementById('original-image');
const processedImage = document.getElementById('processed-image');

imageUpload.addEventListener('change', e => {
  const file = e.target.files[0];
  const reader = new FileReader();

  reader.onload = e => {
    originalImage.src = e.target.result;
    processedImage.src = '';
    processedImage.style.display = 'none';
  }

  reader.readAsDataURL(file);
});

removeBackgroundBtn.addEventListener('click', e => {
  const formData = new FormData();
  formData.append('image', imageUpload.files[0]);

  fetch('process.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.text())
  .then(data => {
    processedImage.src = data;
    processedImage.style.display = 'inline-block';
  });
});
