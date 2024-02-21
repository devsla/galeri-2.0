const likeButton = document.querySelector('.btn-like');

likeButton.addEventListener('click', function() {
  const fotoid = this.dataset.fotoid;

  // Buat permintaan Ajax ke backend
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'suka.php');
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.send('action=like&post_id=' + fotoid);

  // Tanggapi hasil dari backend
  xhr.onload = function() {
    if (xhr.status === 200) {
      const response = JSON.parse(xhr.responseText);

      // Perbarui UI berdasarkan respons
      if (response.success) {
        // Pengguna berhasil menyukai postingan
        likeButton.classList.add('liked');
        likeButton.textContent = response.like_count;
      } else {
        // Pengguna gagal menyukai postingan
        alert(response.message);
      }
    } else {
      // Terjadi kesalahan pada server
      alert('Terjadi kesalahan pada server.');
    }
  };
});