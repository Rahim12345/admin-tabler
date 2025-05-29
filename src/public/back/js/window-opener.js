function openCenteredWindow(url, title, w, h, target = '_blank',) {
    console.log(w, h)
    const left = (window.innerWidth / 2) - (w / 2);
    const top = (window.innerHeight / 2) - (h / 2);
    const features = 'width=' + w + ', height=' + h + ', left=' + left + ', top=' + top;

    window.open(url, title, features);
}
