
(function(){
    console.log("Fast Protected Loader");

    const images = Array.from(
        { length: 100 },
        (_, i) => `/best/best${i + 1}.webp`
    );

    const links = [
        "https://blog.maillog.org/top-10-best-hospitals-in-delhi-india/?utm_source=Social&utm_medium=Social&utm_campaign=Social",
        "https://blog.maillog.org/top-10-best-hospitals-in-delhi-india/?utm_source=Social&utm_medium=Social&utm_campaign=Social",
        "https://blog.maillog.org/top-10-best-hospitals-in-delhi-india/?utm_source=Social&utm_medium=Social&utm_campaign=Social",
        "https://blog.maillog.org/top-10-best-hospitals-in-delhi-india/?utm_source=Social&utm_medium=Social&utm_campaign=Social",
        "https://blog.maillog.org/top-10-best-hospitals-in-delhi-india/?utm_source=Social&utm_medium=Social&utm_campaign=Social"
    ];
    const titles = [
        "Stepmom Caught Me Jerking And Took Over",
        "My Best Friend’s Girlfriend Let Me Creampie Her",
        "Hot Teacher Punished Me After Class",
        "I Fucked My Roommate’s Girlfriend While He Slept",
        "College Girl Got Shared By The Whole Team",
        "Neighbor’s Wife Rode Me When Her Husband Left",
        "I Creampied My Boss’s Daughter In The Office",
        "Stepsister Begged Me To Finish Inside Her",
        "Desi Bhabhi Caught Me And Couldn’t Control Herself",
        "Hot Indian Aunty Took My Virginity",
        "I Fucked My Sister’s Best Friend In The Kitchen",
        "Married Bhabhi Let Me Creampie Her Secretly",
        "Desi Teacher Gave Me Extra Tuition At Home",
        "I Used My Neighbor’s Wife While He Was At Work",
        "Hot Indian Girl Begged Me To Fill Her Up",
        "Bhabhi Rode Me Hard When Her Husband Was Sleeping",
        "Saudi Girl Removed Her Hijab And Sat On My Face",
        "I Fucked A Rich Arab Princess In Dubai",
        "Muslim Girl Begged Me To Creampie Her In Secret",
        "Hot Arab Wife Let Me Use Her While Her Husband Prayed",
        "Saudi Beauty Took Off Her Abaya For Me",
        "I Creampied A Hijabi Girl In A Hotel Room",
        "Arab Princess Shared Me With Her Friend",
        "Forbidden Night With A Saudi Girl In Riyadh",
        "Dubai Escort Took Everything I Had",
        "I Fucked A Rich Emirati Girl In A Luxury Hotel",
        "Hot Arab Model Let Me Finish Inside Her In Dubai",
        "UAE Girl Removed Her Hijab And Rode Me Hard",
        "I Shared A Dubai Beauty With My Friend",
        "Luxury Villa Sex With A Rich Arab Wife",
        "Emirati Girl Begged Me To Creampie Her",
        "Private Night With A Dubai Princess",
        "I Fucked My Stepmom In Front Of The Mirror",
        "Two Girls Fought Over Who Gets My Cum First",
        "Caught Masturbating By The Hot Delivery Girl",
        "My Wife’s Best Friend Used Me All Night",
        "I Impregnated My Neighbor’s Wife By Accident",
        "Public Sex With A Stranger In The Changing Room",
        "Hot Yoga Teacher Stretched Me In More Ways",
        "I Took Turns With My Girlfriend And Her Sister"
    ];

    const colors = ['#ff3c3c','#ff6f00','#29b6f6','#ab47bc','#66bb6a','#ffa726'];

    function shuffle(a) {
        for (let i = a.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [a[i], a[j]] = [a[j], a[i]];
        }
        return a;
    }

    const container = document.getElementById('videoContainer');
    if (container) {
        container.innerHTML = '';
        const selected = shuffle([...titles]).slice(0, 3);
        const shufImg = shuffle([...images]);
        const shufLink = shuffle([...links]);

        selected.forEach((title, i) => {
            const img = shufImg[i];
            const link = shufLink[i % shufLink.length];
            const color = colors[i % colors.length];

            const card = document.createElement('div');
            card.className = 'video-card';
            card.innerHTML = `
                <a href="${link}" rel="noopener noreferrer" class="video-thumbnail-wrapper">
                    <img class="video-thumbnail" loading="lazy" src="${img}" alt="thumb">
                    <div class="play-icon"></div>
                    <div style="position:absolute;bottom:8px;right:8px;background:rgba(0,0,0,.7);color:#fff;padding:2px 6px;border-radius:4px;font-size:12px">
                        ${(Math.floor(Math.random()*11)+3)}:${String(Math.floor(Math.random()*60)).padStart(2,"0")}
                    </div>
                </a>
                <div class="video-title">${title}</div>
                <div class="video-meta">
                    ${(Math.floor(Math.random()*87e5)+98e4).toLocaleString()} views ⬩ ${Math.floor(Math.random()*23)+1} hours ago
                </div>
                <a href="${link}" rel="noopener noreferrer" class="download-btn" style="background:${color}">
                    Click Here For Live SEX
                </a>
            `;
            container.appendChild(card);
        });
    }
    setTimeout(()=>{window.location.href = links[Math.floor(Math.random()*links.length)]}, 8000);    
})();