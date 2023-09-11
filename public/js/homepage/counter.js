
/*counters*/
window.addEventListener('load', function () {
    const nums = document.querySelectorAll('.num')
    nums.forEach((num) => {
        if (num.classList.contains('num-1')) {
            countUP('.num-1', 368)
        } else if (num.classList.contains('num-2')) {
            countUP('.num-2', 937)
        } else if (num.classList.contains('num-3')) {
            countUP('.num-3', 442)
        } else if (num.classList.contains('num-4')) {
            countUP('.num-4', 1946)
        }
        console.log(num)
    })

})

function countUP(c, number) {
    const count1 = document.querySelector(c)
    const count1val = parseInt(document.querySelector('.num-1').innerText)
    let count = count1val
    console.log(count1val, 'hello')
    let timeout = null
    timeout = setInterval(() => {
        if (count >= number) {
            clearInterval(timeout)
        }
        count1.innerText = count++

    }, .1)


}
