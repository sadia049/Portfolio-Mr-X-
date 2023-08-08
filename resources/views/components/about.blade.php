<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                    <p id="about-title" class="lead fw-light mb-4"></p>
                    <p id="detail" class="text-muted"></p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a id="twitter" target="_blank" class="text-gradient" href=""><i class="bi bi-twitter"></i></a>
                        <a id="linked" target="_blank"  class="text-gradient" href=""><i class="bi bi-linkedin"></i></a>
                        <a id="github" target="_blank"  class="text-gradient" href=""><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>


const getAbout=async()=>{

    //lodaer show content hide
    document.getElementById('loading-div').classList.remove('d-none');
    document.getElementById('content-div').classList.add('d-none');
    let response = await axios.get('/aboutData');

    document.getElementById('loading-div').classList.add('d-none');
    document.getElementById('content-div').classList.remove('d-none');

    
    
    document.getElementById('about-title').innerHTML = response.data['title'];
    document.getElementById('detail').innerHTML = response.data['details'];
   




}

getAbout();

const getSocial=async()=>{


    document.getElementById('loading-div').classList.remove('d-none');
    document.getElementById('content-div').classList.add('d-none');
    let response = await axios.get('/socialData');

    document.getElementById('loading-div').classList.add('d-none');
    document.getElementById('content-div').classList.remove('d-none');

    document.getElementById('twitter').href = response.data['twitterLink'];
    document.getElementById('linked').href = response.data['linkedinLink'];
    document.getElementById('github').href = response.data['githubLink'];



}

getSocial();



</script>