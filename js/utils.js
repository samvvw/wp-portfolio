const logo = document.querySelector(".logo-wrapper path");

console.log(logo.getTotalLength());
const pathL = logo.getTotalLength();

logo.style.strokeDasharray = `${pathL}px`;
logo.style.strokeDashoffset = `${pathL}px`;
logo.style.fill = `transparent`;
logo.style.stroke = `white`;
logo.style.strokeWidth = `4px`;

function setStroke(percentage) {
    const stroke = pathL - (percentage / 100) * pathL;
    console.log(stroke);
    return stroke;
}
window.addEventListener("load", () => {
    logo.style.transition =
        "stroke-dashoffset 3s cubic-bezier(.34,-1.61,.55,1.83) 0s, fill 2s ease-in-out 2s, stroke-dasharray 3s ease-out 1s";
    logo.style.fill = "#A7F2EB";
    logo.style.strokeDasharray = "0";
    logo.style.strokeDashoffset = `${setStroke(100)}px`;
});
