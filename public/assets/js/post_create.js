// CUSTOM SCRIPT JS BY FAUZI

// ========= IMAGE BASE64 =========
// function convertToBase64(file) {
//     return new Promise((resolve, reject) => {
//         const reader = new FileReader();
//         reader.readAsDataURL(file);
//         reader.onload = () => {
//             const image = new Image();
//             image.src = reader.result;
//             image.onload = () => {
//                 const canvas = document.createElement("canvas");
//                 const aspectRatio = 16 / 9; // Rasio lebar terhadap tinggi
//                 let width = image.width;
//                 let height = image.height;

//                 // Menentukan ukuran gambar yang akan di-crop
//                 if (width / height > aspectRatio) {
//                     width = height * aspectRatio;
//                 } else {
//                     height = width / aspectRatio;
//                 }

//                 canvas.width = width;
//                 canvas.height = height;
//                 const ctx = canvas.getContext("2d");
//                 ctx.drawImage(image, 0, 0, width, height);
//                 const compressedBase64 = canvas.toDataURL("image/jpeg", 0.6); // Set the image quality (0.7 = 70%)
//                 resolve(compressedBase64);
//             };
//         };
//         reader.onerror = (error) => reject(error);
//     });
// }
function convertToBase64(file) {
    return new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = () => {
            const image = new Image();
            image.src = reader.result;
            image.onload = () => {
                const canvas = document.createElement("canvas");
                const aspectRatio = 16 / 9; // Rasio lebar terhadap tinggi
                let width = image.width;
                let height = image.height;
                let newWidth, newHeight, offsetX, offsetY;

                if (width / height > aspectRatio) {
                    // Crop width to match aspect ratio
                    newWidth = height * aspectRatio;
                    newHeight = height;
                    offsetX = (width - newWidth) / 2;
                    offsetY = 0;
                } else {
                    // Crop height to match aspect ratio
                    newWidth = width;
                    newHeight = width / aspectRatio;
                    offsetX = 0;
                    offsetY = (height - newHeight) / 2;
                }

                canvas.width = newWidth;
                canvas.height = newHeight;
                const ctx = canvas.getContext("2d");
                ctx.drawImage(
                    image,
                    offsetX,
                    offsetY,
                    newWidth,
                    newHeight,
                    0,
                    0,
                    newWidth,
                    newHeight
                );
                const compressedBase64 = canvas.toDataURL("image/jpeg", 0.6); // Set the image quality (0.6 = 60%)
                resolve(compressedBase64);
            };
        };
        reader.onerror = (error) => reject(error);
    });
}


const imageUploadElement = document.getElementById("gambar_wisata");

if (imageUploadElement) {
    // Add event listener for when a file is selected
    imageUploadElement.addEventListener("change", async function () {
        const file = this.files[0]; // Get the selected file
        if (file) {
            try {
                const base64String = await convertToBase64(file); // Convert file to base64 with compression
                // console.log(base64String); // Output the base64 string

                // Set the base64 string as the source of an image element
                const imageElement = document.getElementById("image-base64");
                if (imageElement) {
                    imageElement.src = base64String;
                } else {
                    console.log("Image element not found on the page."); // Log if image element is not found
                }

                // Set the base64 string to the value of an input element
                const inputElement = document.getElementById("gambar_input");
                if (inputElement) {
                    inputElement.value = base64String;
                } else {
                    console.log("Input element not found on the page."); // Log if input element is not found
                }
            } catch (error) {
                console.error("Error converting file to base64:", error);
            }
        }
    });
} else {
    console.log("No data image: element with ID 'image-upload' not found."); // Log if image-upload element is not found
}
