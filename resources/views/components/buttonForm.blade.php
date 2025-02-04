<div class="d-flex justify-content-end gap-2 mt-3">
    <a class="btn btn-outline-primary" href="{{ route($route) }}">Kembali</a>
    <button class="btn btn-primary" id="saveButton" type="submit" onclick="handleSaveButton()">Simpan</button>
    <button class="btn btn-primary" id="savingButton" disabled style="display: none;">
        Menyimpan... <i class="fa-solid fa-circle-notch fa-spin"></i>
    </button>
</div>
<script>
    function handleSaveButton() {
        // Dapatkan elemen tombol
        const saveButton = document.getElementById('saveButton');
        const savingButton = document.getElementById('savingButton');

        // Sembunyikan tombol "Simpan" dan tampilkan tombol "Menyimpan..."
        saveButton.style.display = 'none';
        savingButton.style.display = 'inline-block';

        // Pastikan form tetap dikirim
        const form = saveButton.closest('form');
        if (form) {
            form.submit();
        }
    }
</script>
