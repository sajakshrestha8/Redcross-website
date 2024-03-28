//for image it is required
const canvas = document.getElementById('canvas')
const ctx = canvas.getContext('2d')

//for text
const nameInput = document.getElementById('name')

//for download
const downloadBtn = document.getElementById('download-btn')

//for image
const image = new Image()
image.src = "../MEMBERSHIPCERT.jpg"

image.onload = function(){
    drawImage()
}

function drawImage(){
    ctx.clearRect(image, 0, 0, canvas.width, canvas.height)
    ctx.drawImage(image, 0, 0, canvas.width, canvas.height)

    //ctx.drawImage(image source, x-axis, top position or y-axis, width for image, height for image)

    ctx.font = '30px monotype corsiva'
    ctx.fillStyle = '#000'
    // ctx.fillText(Iname, 250, 180)

    ctx.fillText(nameInput.value, 265, 270)

    //ctx.fillText takes three arguments : name, px from left(x-axis), px from top(y-axis)
}

nameInput.addEventListener('input',function(){
    // const Iname = nameInput.value
    drawImage()
})

downloadBtn.addEventListener('click',function(){
    downloadBtn.href = canvas.toDataURL()   
    // downloadBtn.href = canvas.toDataURL(image/jpg)
    //downloadBtn.download = true             
    downloadBtn.download = 'Certificate-' + nameInput.value   
})