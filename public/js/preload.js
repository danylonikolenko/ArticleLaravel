function preloader() {
    $(()=>{
        setInterval(()=>{
            let p = $(".preloader");
            p.css('opacity',0);

            setInterval(
                ()=>p.remove(),
                parseInt(p.css('--duration'))*1000

            );
        },800);


    });
}
preloader();