<?php /* Template Name: Product */ ?>

<?php get_header(); ?>

<div class="hero hero--product align-center">
  <div class="container hero__left">
    <div class="row">
      <div class="offset-md-1 col-md-10">
        <span class="left-upper-text">Lets get you acquainted with the </span>
        <h1 class="title title--wave">BASIS ID - a KYC/AML workflow management platform</h1>
        <p>Customisable solution for legal compliance and fraud prevention, that allows to satisfy the requirements of
          the regulatory authorities, provide your compliance team with powerful tools and perform smooth customer
          onboarding.</p>
      </div>
    </div>
    <div class="row hero__icons">
      <div class="col-md-3">
        <img src="<?php echo get_theme_file_uri('/img/product/partner-1.svg') ?>" alt="partner">
      </div>
      <div class="col-md-3">
        <img src="<?php echo get_theme_file_uri('/img/product/partner-1.svg') ?>" alt="partner">
      </div>
      <div class="col-md-3">
        <img src="<?php echo get_theme_file_uri('/img/product/partner-1.svg') ?>" alt="partner">
      </div>
      <div class="col-md-3">
        <img src="<?php echo get_theme_file_uri('/img/product/partner-1.svg') ?>" alt="partner">
      </div>
    </div>
    <div class="buttons">
      <button class="btn btn--pink">Request a demo</button>
      <span> or </span>
      <a href="#" class="">Learn more</a>
    </div>
  </div>
</div>

<section class="section-tabs section-tabs--product product">

  <div class="container">
    <ul class="nav nav-pills section-tabs__tabs" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
          aria-controls="pills-home" aria-selected="true">КYC/ AML</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
          aria-controls="pills-profile" aria-selected="false">Compliance platform</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
          aria-controls="pills-contact" aria-selected="false">Documents verification</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-forth-tab" data-toggle="pill" href="#pills-forth" role="tab"
          aria-controls="pills-forth" aria-selected="false">Integration</a>
      </li>
    </ul>
  </div>

  <div class="tab-content" id="pills-tabContent">

    <div class="tab-pane bg-blue fade show active product__first-pane" id="pills-home" role="tabpanel"
      aria-labelledby="pills-home-tab">
      <div class="container">
        <div class="row">
          <div class="col-md-6">

            <h2 class="headline headline--blue-line">КYC/ AML by BASIS ID</h2>
            <span class="tab-pane__desc">
              The BASIS ID KYC & AML solution is a personal data management platform that performs the processing of the
              identity dataset and provides powerful personal data management tools.
            </span>

            <div class="list">

              <div class="list__item">
                <img src="<?php echo get_theme_file_uri('/img/product/pane-1/list-1.svg') ?>" alt="icon">
                <div class="list__text">
                  <h3 class="headline">Automatic KYC/AML verification</h3>
                  <span>Automatic document and biometric verification let the customer gain access to the service
                    faster.</span>
                </div>
              </div>

              <div class="list__item">
                <img src="<?php echo get_theme_file_uri('/img/product/pane-1/list-2.svg') ?>" alt="icon">
                <div class="list__text">
                  <h3 class="headline">Transparency</h3>
                  <span>CRM allows accessing the dataset and results of the processing at any given moment.</span>
                </div>
              </div>

              <div class="list__item">
                <img src="<?php echo get_theme_file_uri('/img/product/pane-1/list-3.svg') ?>" alt="icon">
                <div class="list__text">
                  <h3 class="headline">Conversion rate
                  </h3>
                  <span>Customer retention triggers and enchanced due diligence workflow allow onboarding more clients.
                  </span>
                </div>
              </div>

              <div class="list__item">
                <img src="<?php echo get_theme_file_uri('/img/product/pane-1/list-4.svg') ?>" alt="icon">
                <div class="list__text">
                  <h3 class="headline">Fast integration
                  </h3>
                  <span>Web-and-mobile-friendly widget and API available.</span>
                </div>
              </div>

            </div>

          </div>

          <div class="col-md-6">
            <img class="img-fluid" src="<?php echo get_theme_file_uri('/img/product/pane-1/right.png') ?>" alt="right">
          </div>

        </div>

        <div class="cards row">

          <div class="col-md-4">
            <div class="cards__item">
              <img src="<?php echo get_theme_file_uri('/img/product/pane-1/card-1.svg') ?>" alt="card">
              <h3 class="headline">Identity verification
              </h3>
              <ul>
                <li>Passport</li>
                <li>Identity card</li>
                <li>Driving license</li>
                <li>Email address</li>
                <li>Phone number</li>
                <li>Proof of address</li>
                <li>Proof of income</li>
              </ul>
            </div>
          </div>

          <div class="col-md-4">
            <div class="cards__item">
              <img src="<?php echo get_theme_file_uri('/img/product/pane-1/card-2.svg') ?>" alt="card">
              <h3 class="headline">Biometrics
              </h3>
              <ul>
                <li>500 video frames biometric and liveness analysis</li>
                <li>3D face modelling for motion,
                  rotation and blinking analysis</li>
                <li>Facial expressions analysis</li>
                <li>Comparison with the identity document</li>
              </ul>
            </div>
          </div>

          <div class="col-md-4">
            <div class="cards__item">
              <img src="<?php echo get_theme_file_uri('/img/product/pane-1/card-3.svg') ?>" alt="card">
              <h3 class="headline">Screening
              </h3>
              <ul>
                <li>Passport</li>
                <li>Identity card</li>
                <li>Phone number</li>
                <li>Proof of address</li>
                <li>Proof of income</li>
              </ul>
            </div>
          </div>

        </div>

      </div>

    </div>

    <div class="tab-pane tab-pane--reverse fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      <div class="container">
        <div class="row">

          <div class="col-md-3">
            <img class="img-fluid" src="<?php echo get_theme_file_uri('/img/compliance/tab-icon-3.svg') ?>" alt="icon">
          </div>

          <div class="col-md-9">

            <h2 class="headline headline--blue-line">KYC / AML Compliance</h2>
            <span class="tab-pane__desc">
              BASIS ID services treat compliance as it’s core feature
            </span>

            <div class="tab-pane__list">
              <div class="item">
                <h3 class="headline">Compliant Worldwide</h3>
                <p>BASIS ID KYC service has been initially designed to satisfy various legal requirements and
                  guidelines. We have thoroughly studied the AML/CTF legislation to provide a worldwide compatible
                  solution and protect our clients by the highest standards in the field.
                </p>
              </div>
              <div class="item">
                <h3 class="headline">Compliant Worldwide</h3>
                <p>BASIS ID KYC service has been initially designed to satisfy various legal requirements and
                  guidelines. We have thoroughly studied the AML/CTF legislation to provide a worldwide compatible
                  solution and protect our clients by the highest standards in the field.
                </p>
              </div>
              <div class="item">
                <h3 class="headline">Compliant Worldwide</h3>
                <p>BASIS ID KYC service has been initially designed to satisfy various legal requirements and
                  guidelines. We have thoroughly studied the AML/CTF legislation to provide a worldwide compatible
                  solution and protect our clients by the highest standards in the field.
                </p>
              </div>
              <div class="item">
                <h3 class="headline">Compliant Worldwide</h3>
                <p>BASIS ID KYC service has been initially designed to satisfy various legal requirements and
                  guidelines. We have thoroughly studied the AML/CTF legislation to provide a worldwide compatible
                  solution and protect our clients by the highest standards in the field.
                </p>
              </div>
            </div>

            <div class="call-to-action">
              <span>Read more about BASIS ID GDPR solution and how to make your business compliant</span>
              <button class="btn btn--pink">Request a demo</button>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="tab-pane fade bg-pink" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
      <div class="container">
        <div class="row">
          <div class="col-md-9">

            <h2 class="headline headline--blue-line">KYC / AML Compliance</h2>
            <span class="tab-pane__desc">
              BASIS ID services treat compliance as it’s core feature
            </span>

            <div class="tab-pane__list">
              <div class="item">
                <h3 class="headline">Compliant Worldwide</h3>
                <p>BASIS ID KYC service has been initially designed to satisfy various legal requirements and
                  guidelines. We have thoroughly studied the AML/CTF legislation to provide a worldwide compatible
                  solution and protect our clients by the highest standards in the field.
                </p>
              </div>
              <div class="item">
                <h3 class="headline">Compliant Worldwide</h3>
                <p>BASIS ID KYC service has been initially designed to satisfy various legal requirements and
                  guidelines. We have thoroughly studied the AML/CTF legislation to provide a worldwide compatible
                  solution and protect our clients by the highest standards in the field.
                </p>
              </div>
              <div class="item">
                <h3 class="headline">Compliant Worldwide</h3>
                <p>BASIS ID KYC service has been initially designed to satisfy various legal requirements and
                  guidelines. We have thoroughly studied the AML/CTF legislation to provide a worldwide compatible
                  solution and protect our clients by the highest standards in the field.
                </p>
              </div>
              <div class="item">
                <h3 class="headline">Compliant Worldwide</h3>
                <p>BASIS ID KYC service has been initially designed to satisfy various legal requirements and
                  guidelines. We have thoroughly studied the AML/CTF legislation to provide a worldwide compatible
                  solution and protect our clients by the highest standards in the field.
                </p>
              </div>
            </div>

          </div>

          <div class="col-md-3">
            <img class="img-fluid" src="<?php echo get_theme_file_uri('/img/compliance/tab-icon-2.svg') ?>" alt="icon">
          </div>

        </div>
      </div>
    </div>

  </div>

</section>

<?php get_template_part('components/component', 'form') ?>

<?php get_footer(); ?>