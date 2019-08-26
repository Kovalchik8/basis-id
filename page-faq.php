<?php /* Template Name: FAQ */ ?>
<?php get_header(); ?>

<section class="faq">

  <div class="left">
    <ul class="left__list list-group" id="faq-nav">
      <li class="left__item left__item--head">
        <div class="left__wrapper">
          <span>Widget demo</span>
        </div>
      </li>
      <li class="left__item">
        <a href="#section-1" class="list-group-item">
          <div class="left__wrapper">
            <span class="order">1</span> Widget embded code
          </div>
        </a>
      </li>
      <li class="left__item">
        <a href="#section-2" class="list-group-item">
          <div class="left__wrapper">
            <span class="order">2</span> Integration
          </div>
        </a>
      </li>
      <li class="left__item">
        <a href="#section-3" class="list-group-item">
          <div class="left__wrapper">
            <span class="order">3</span>
            <div class="left__label">
              <span>Callback</span>
              <span class="label-important">Important</span>
            </div>
          </div>
        </a>
      </li>
      <li class="left__item">
        <a href="#section-4" class="list-group-item">
          <div class="left__wrapper">
            <span class="order">4</span> Signature
          </div>
        </a>
      </li>
      <li class="left__item">
        <a href="#section-5" class="list-group-item">
          <div class="left__wrapper">
            <span class="order">5</span> Autocheck bad reasons
          </div>
        </a>
      </li>
      <li class="left__item">
        <a href="#section-6" class="list-group-item">
          <div class="left__wrapper">
            <span class="order">6</span> Callback settings
          </div>
        </a>
      </li>

    </ul>
  </div>

  <div class="right">
    <div class="right__top align-center">
      <div class="wrapper">
        <div class="note">
          To verify your documents, identity and gain verification experience from BASIS ID, use the widget below. You
          will receive verification results by email within 24 hours.</div>

        <div class="faq__card">
          <div class="content">
            <img src="<?php echo get_theme_file_uri('/img/faq/icon.svg') ?>" alt="user">
            <h2 class="headline headline--manrope">Welcome! Let’s start
              verification
            </h2>
            <span>You will need to answer a few simple questions to complete registration.</span>
            <a class="btn btn--blue-gradient" href="#">Let's go</a>
          </div>
        </div>

        <div class="powered-by">
          <img src="<?php echo get_theme_file_uri('/img/faq/powered-by.svg') ?>" alt="powered-by">
        </div>
      </div>
    </div>

    <div class="right__content points">
      <div class="wrapper">
        <h2 class="headline">Integration Guidance </h2>

        <div class="point" id="section-1">
          <h3 class="headline"><span>1.</span> Widget Integration</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, accusamus dolor optio eaque
            exercitationem
            error possimus molestias! Natus, eius est eveniet cum adipisci laboriosam, voluptatum, minima laudantium
            inventore repellendus similique!</p>
          <div class="point__code">
            <pre><code class="javascript">
window.BAS.AS.initFrame({
    key: "BASISID_API_KEY",
    bas_gw: "https://api.basisid.com/",
    container_id: "bas-widget-container",
    ui: {
        width: "100%",
        height: "108px",
        style: "",
    },
    options: {
    },
    events:{
        onLoad: function(){
            console.log("BAS AS loaded");
        },
        onManualCheck: function(result) {
            if (result.status === "ok"){
              // User data sending success
              // ... Add Your code here ...
            }
        },
    }
});
           </code></pre>
          </div>
        </div>

        <div class="point" id="section-2">
          <h3 class="headline"><span>2.</span> Result</h3>
          <p>Upon successful/unsuccessful end of the user registration via Widget, you will receive an
            object called
            <span class="monospace"> "result".</span><br>
            Possible values of the <span class="monospace">"result"</span> object:<br>
            <span class="monospace">• status</span> - request status;<br>
            <span class="monospace">• user_hash </span> - unique string user ID;<br>
            If a user has successfully registered, result looks like:<br>
          </p>
          <div class="point__code">
            <pre><code class="javascript">
{
 status: 'ok',
 user_hash: '27c5728a-7130-408d-b0a1-d55ed8ae7b2f'
}
           </code></pre>
          </div>

          <p>In case if registration has been cancelled:</p>

          <div class="point__code">
            <pre><code class="javascript">
{status: 'canceled'}
           </code></pre>
          </div>
        </div>

        <div class="point" id="section-3">
          <div class="headline-with-span">
            <h3 class="headline"><span>3.</span> Callback</h3>
            <span class="label-important">Important</span>
          </div>
          <p>BASIS ID is using the callback method to transfer the statuses of the verification to the
            client’s platform.</p>
          <p>There are various types of callbacks BASIS ID is able to send, each designed for a specific stage of the
            verification process. A client has to set up a callback URL from where their system will collect the
            statuses of the verification process.</p>
          <p>An example of such a callback:
          </p>

          <div class="point__code">
            <pre><code class="javascript">
 {
"user_id":20272,
 "user_hash":"27c5728a-7130-408d-b0a1-d55ed8ae7b2f",
 "status":11,
"signature":"7ca05937a0e5c42147be2aa23ffad87e80bd866e1ff7950ec6841d4d87d844fe",
 "Autocheck_bad_reasons":""
}
           </code></pre>
          </div>
          <p>In response to a callback, you have to send back the status <span class="monospace">“200OK”</span> with any
            text, for example, <span class="monospace">“OK”</span>.</p>
          <p>If a response has not been received or it did not contain <span class="monospace">“200OK”</span>, the
            system stops sending requests for 3
            minutes. After 3 attempts the system will delay the next attempt by an hour.</p>

        </div>

        <div class="point" id="section-4">
          <h3 class="headline"><span>4.</span> Signature</h3>
          <p>Every callback contains a signature that allows verifying that the callback is genuine and comes from the
            BASIS ID.</p>
          <p>The signature is a <span class="monospace">sha256</span> concatenation of the values/text in all the fields
            of a callback and API Secret
            Key 2, available in the <a href="#" target="_blank" rel="noopener noreferrer">Widget Designer</a>:
          </p>
          <div class="point__code">
            <pre><code class="plaintext">
sha256(BASIS_API_SECRET2+user_id+user_hash+status+autocheck_bad_reasons)=signature
           </code></pre>
          </div>

          <p>Java signature example:</p>

          <div class="point__code">
            <pre><code class="java">
String sign256hex = 
    org.apache.commons.codec.digest.DigestUtils.sha256Hex(BASIS_API_SECRET2 + user_id + user_hash + status + autocheck_bad_reasons);
if (sign256hex.equals(signature)) {
    // Signed ...
}
           </code></pre>
          </div>

          <p>PHP signature example:</p>

          <div class="point__code">
            <pre><code class="php">
$signature = hash('sha256', BASIS_API_SECRET2 . $inp['user_id'] . $inp['user_hash'] . $inp['status'] . $inp['autocheck_bad_reasons']);
if ($signature == $inp['signature']) {
}
           </code></pre>
          </div>

        </div>

        <div class="point" id="section-5">
          <h3 class="headline"><span>5.</span> Autocheck bad reasons</h3>
          <p>The reasons for the profile to be automatically declined. You can have one reason or many comma separated
            reasons in "autocheck_bad_reasons" field:</p>

          <ul>
            <li><span class="monospace">pep</span> - politically exposed person</li>
            <li><span class="monospace">law enforcement</span></li>
            <li><span class="monospace">regulatory enforcement</span></li>
            <li> <span class="monospace">other bodies</span></li>
            <li><span class="monospace">sanctions</span> - government etc sanctions</li>
            <li> <span class="monospace">black_list</span> - A person with the same name is mentioned in blacklist.</li>
            <li><span class="monospace">video</span> - The passport/ID picture and face on the video are not similar. No
              match in facial recognition or
              failed liveness check.</li>
            <li><span class="monospace">mrz</span> - The first name/surname/middle name/date of birth do not match with
              passport's machine readable
              zone
              (MRZ) or the document is not valid.</li>
          </ul>

        </div>

        <div class="point" id="section-6">
          <h3 class="headline"><span>6.</span> Callback settings</h3>
          <p>The callback can be sent at various points of the verification process. Please select when would you like
            to receive callbacks to your URL.</p>
          <p>At what stage/s the callback needs to be sent:</p>

          <table class="table table-borderless">
            <thead>
              <tr>
                <th scope="col">№</th>
                <th scope="col">Callback type</th>
                <th scope="col">Status values</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">A</th>
                <td>When a new user is registered in the system</td>
                <td>2</td>
              </tr>
              <tr>
                <th scope="row">B</th>
                <td>When the AML/Sanction screening is completed</td>
                <td>10/11</td>
              </tr>
              <tr>
                <th scope="row">C</th>
                <td>When the full verification is completed</td>
                <td>10/11</td>
              </tr>
              <tr>
                <th scope="row">D</th>
                <td>When a user is requested to provide additional data</td>
                <td>3</td>
              </tr>
            </tbody>
          </table>

          <h3 class="headline headline--callback">Callback Examples</h3>

          <div class="accordion point__accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <span class="order">A</span>
                    <div class="accordion__wrapper">
                      <span> When a new user is registered in the system</span>
                      <span class="label label--green">Approved</span>
                    </div>
                  </button>
                </h2>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <div class="point__code">
                    <pre><code class="plaintext">
{
  "user_id":1337,
  "user_hash":"27c5728a-7130-408d-b0a1-d55ed8ae7b2f",
  "Status": 2,
"Signature":"7ca05937a0e5c42147be2aa23ffad87e80bd866e1ff7950ec6841d4d87d844fe",
  “Autocheck_bad_reasons”: 
  “Email”: johndoe@mail.com
  “autocheck_bad_reasons”:
}
           </code></pre>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo">
                    <span class="order">B</span>
                    <div class="accordion__wrapper">
                      <span>When the AML/Sanction screening is completed</span>
                      <span class="label label--pink">Declined</span>
                    </div>
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  <div class="point__code">
                    <pre><code class="plaintext">
{
  "user_id":1337,
  "user_hash":"27c5728a-7130-408d-b0a1-d55ed8ae7b2f",
  "Status": 2,
"Signature":"7ca05937a0e5c42147be2aa23ffad87e80bd866e1ff7950ec6841d4d87d844fe",
  “Autocheck_bad_reasons”: 
  “Email”: johndoe@mail.com
  “autocheck_bad_reasons”:
}
           </code></pre>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="false" aria-controls="collapseThree">
                    <span class="order">C</span>
                    <div class="accordion__wrapper">
                      <span>When the full verification is completed</span>
                      <span class="label label--green">Approved</span>
                    </div>
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  <div class="point__code">
                    <pre><code class="plaintext">
{
  "user_id":1337,
  "user_hash":"27c5728a-7130-408d-b0a1-d55ed8ae7b2f",
  "Status": 2,
"Signature":"7ca05937a0e5c42147be2aa23ffad87e80bd866e1ff7950ec6841d4d87d844fe",
  “Autocheck_bad_reasons”: 
  “Email”: johndoe@mail.com
  “autocheck_bad_reasons”:
}
           </code></pre>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div> <!-- points -->

    </div>
  </div>
  </div>
</section>

<!-- Hightlight js -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/styles/agate.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/highlight.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', (event) => {
  document.querySelectorAll('pre code').forEach((code) => {
    hljs.highlightBlock(code);
  });
});
</script>

<?php get_footer(); ?>