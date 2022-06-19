const image_input1 = document.querySelector("#image_input1");
var uploaded_image1 = "";


image_input1.addEventListener("change", function () {
    const reader = new FileReader();
    reader.addEventListener("load", () => {
        uploaded_image1 = reader.result;
        document.querySelector("#display_image1").style.backgroundImage = `url(${uploaded_image1})`;
    });
    reader.readAsDataURL(this.files[0]);
})

const image_input2 = document.querySelector("#image_input2");
var uploaded_image2 = "";

image_input2.addEventListener("change", function () {
    const reader = new FileReader();
    reader.addEventListener("load", () => {
        uploaded_image2 = reader.result;
        document.querySelector("#display_image2").style.backgroundImage = `url(${uploaded_image2})`;
    });
    reader.readAsDataURL(this.files[0]);
})

const image_input3 = document.querySelector("#image_input3");
var uploaded_image3 = "";

image_input3.addEventListener("change", function () {
    const reader = new FileReader();
    reader.addEventListener("load", () => {
        uploaded_image3 = reader.result;
        document.querySelector("#display_image3").style.backgroundImage = `url(${uploaded_image3})`;
    });
    reader.readAsDataURL(this.files[0]);
})

const image_input4 = document.querySelector("#image_input4");
var uploaded_image4 = "";

image_input4.addEventListener("change", function () {
    const reader = new FileReader();
    reader.addEventListener("load", () => {
        uploaded_image4 = reader.result;
        document.querySelector("#display_image4").style.backgroundImage = `url(${uploaded_image4})`;
    });
    reader.readAsDataURL(this.files[0]);
})