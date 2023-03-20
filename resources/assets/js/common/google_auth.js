export const initGoogle = () => {
    var apiUrl = 'https://apis.google.com/js/platform.js?onload=onLoad'
    return new Promise((resolve) => {
        var script = document.createElement('script')
        script.src = apiUrl
        script.onreadystatechange = script.onload = function () {
            if (!script.readyState || /loaded|complete/.test(script.readyState)) {
            setTimeout(function () {
                resolve()
            }, 500)
            }
        }
        document.getElementsByTagName('head')[0].appendChild(script)
    })
}