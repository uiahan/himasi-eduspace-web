import "./bootstrap";

document.addEventListener("DOMContentLoaded", function () {
    // Fungsi untuk menambahkan tombol copy ke <pre>
    function addCopyButtons() {
        document.querySelectorAll("pre").forEach((pre) => {
            // Cek jika tombol sudah ada
            if (pre.querySelector(".copy-btn")) return;

            // Buat tombol copy
            const button = document.createElement("button");
            button.className =
                "absolute top-1/2 right-2 transform -translate-y-1/2 bg-gray-500 text-white px-2 py-1 rounded text-sm hover:bg-gray-600 copy-btn";
            button.textContent = "Copy";

            // Tambahkan styling relatif ke <pre>
            pre.classList.add("relative");
            pre.appendChild(button);

            // Event listener untuk copy
            button.addEventListener("click", function () {
                const code = pre.querySelector("code");
                const text = code ? code.textContent : pre.textContent;

                navigator.clipboard
                    .writeText(text)
                    .then(() => {
                        this.textContent = "Copied!";
                        setTimeout(() => {
                            this.textContent = "Copy";
                        }, 2000);
                    })
                    .catch((err) => {
                        console.error("Failed to copy: ", err);
                    });
            });
        });
    }

    // Jalankan pertama kali
    addCopyButtons();

    // Gunakan MutationObserver untuk mendeteksi perubahan di kontainer prose (jika konten dimuat dinamis)
    const proseContainer = document.querySelector(".prose");
    if (proseContainer) {
        const observer = new MutationObserver(addCopyButtons);
        observer.observe(proseContainer, { childList: true, subtree: true });
    }
    
});
