@include('includes.head')
@include('includes.navbar')

<section>
    <div class="faqs-page-heading">
        <div class="about-title">
            <h1 id="navA">Frequently Asked Questions</h1>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 py-5">
                <h2 style="color:#050794;">Frequently Asked Questions</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <button class="accordion mx-2">Can I pay on instalments?</button>
<div class="panel">
  <p class="mt-2">No, the price has been rendered to the barest minimum, the training value is worth over 300,000 
    as you will be having live sessions with top coding expert in the industry. </p>
</div>

<button class="accordion mt-4 mx-2">What will I be receiving once I make payment?</button>
<div class="panel">
  <p class="mt-2">You will be gaining access to resources, files to setup your programming device, 
    access to live follow up and support session, access to a premium community for free,
     access to video training recorded already for your consumption and self-paced learning. </p>
</div>

<button class="accordion mt-4 mx-2">Can I register anytime?</button>
<div class="panel">
  <p class="mt-2">Yes, you can register anytime, but registration is done cohort by cohort, 
    session by session so that student can be dutifully followed-up</p>
</div>




<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
                </div>
            </div>
        </div>
    </div>
</section>

@include('includes.footer')
@include('includes.scripts')