<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="website icon"
      type="png"
      href="Image/american-red-cross-logo-transparent-21.png"
    />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
  <?php include("nav.php");
  ?> 
  <br><br>

    <div class="requirement-background">
      <!-- Health slogan by Mr. SAJAK SHRESTHA -->
      <label class="requirement-head"
        ><strong>Mission & Values </strong> <br />Red Cross mission, vision, and
        fundamental principles​​.</label
      >
    </div>

    <style>
      .requirement-background {
        background-image: url(Image/requirement.png);
        background-repeat: no-repeat;
        margin-left: 2rem;
        margin-right: 2rem;
        margin-top: 2rem;
        height: 25rem;
        background-size: 100% 30rem;
        padding-top: 7rem;
      }

      .requirement-background {
        font-family: Poppins;
        font-size: 40px;
        color: white;
        padding-left: 50rem;
        text-align: center;
      }

      .grid {
        margin-left: 2rem;
        margin-right: 2rem;
        margin-top: 2rem;
      }
      .requirementhead {
        font-family: Poppins;
        display: flex;
        justify-content: center;
        font-size: 25px;
        margin-left: 10rem;
        margin-top: 2rem;
      }
      .CPR-msg {
        font-family: Poppins;
        font-size: 18px;
      }
      .grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr 1fr 1fr 1fr 1fr;
        column-gap: 2rem;
        row-gap: 2rem;
        justify-content: center;
        align-items: center;
        /* border: 2px red solid; */
      }
    </style>

    <div class="requirementhead">
      <label
        ><b
          >How We Fulfill the Mission Everything we do depends on the needs of
          the people that we serve.</b
        ></label
      ><br />
    </div>

    <div class="requirementbody">
      <label><strong></strong>Learn About Our Mission Services</label>
    </div>

    <div class="grid">
      <div class="border">
        <img src="Image/mission-and-values.jpg" alt="CPR" class="CPRdesc-img" />
      </div>
      <div class="msg-margin">
        <label class="CPR-msg-head"><b>Mission and Values</b></label
        ><br />
        <br />
        <label class="CPR-msg"></label>
          <b>Mission:</b> "At the heart of the Nepal Red Cross Society's mission
          lies a commitment to serving the most vulnerable in our communities
          with compassion and integrity. Our primary goal is to provide
          assistance, especially during times of crisis and disaster, without
          discrimination. Through the dedication of our volunteers and
          partnerships with government agencies and other organizations, we aim
          to mobilize resources effectively to support those in need across
          Nepal." <br /><br />
          <strong><b>Values:</b></strong
          ><br /><br />
          <b>1. Compassionate Assistance:</b> We provide aid with empathy and
          fairness, ensuring it reaches those in need without discrimination.
          <br />
          <b>2. Neutrality and Independence:</b> We remain impartial and
          autonomous, allowing us to assist all individuals regardless of
          conflicts or external influences. <br />
          <b>3. Collaborative Spirit:</b> Through teamwork and partnerships, we
          leverage resources effectively to maximize our impact and support
          communities across Nepal.
        </label>
      </div>

      <div class="msg-margin">
        <label class="CPR-msg-head"><b>Leadership</b></label
        ><br /><br />
        <br />
        <label class="CPR-msg"
          ><b>Visionary Direction:</b> Leaders provide clear guidance and
          inspire others to work towards common humanitarian goals, fostering a
          sense of purpose and unity within the organization. <br /><br />
          <b>Ethical Engagement: </b> Upholding integrity and trust, NRCS
          leaders ensure that all actions align with humanitarian principles,
          promoting transparency and accountability in serving communities
          effectively. </label
        ><br />
      </div>

      <div>
        <img src="Image/leadership.png" alt="CPR" class="CPRdesc-img" />
      </div>

      <div class="border">
        <img src="Image/govern.webp" alt="CPR" class="CPRdesc-img" />
      </div>
      <div class="msg-margin">
        <label class="CPR-msg-head"><b>Governship</b></label
        ><br />
        <br />
        <label class="CPR-msg"></label>
        <b>Transparent Oversight:</b> Governance at the Nepal Red Cross
        Society prioritizes transparency, ensuring that all decisions and
        actions are conducted openly and accountably, fostering trust among
        stakeholders. <br />
        <b>Strategic Direction:</b> NRCS governance provides strategic
        direction, guiding the organization towards fulfilling its humanitarian
        mission effectively, with a focus on sustainability and impact.
      </div>

      <div class="msg-margin">
        <label class="CPR-msg-head"
          ><b>Diversity, Equity and Inclusion</b></label
        ><br />
        <br />
        <label class="CPR-msg"></label>
        <b>Embracing Diversity:</b> Diversity is celebrated at the Nepal Red
        Cross Society, fostering an environment where individuals from various
        backgrounds are valued and respected for their unique perspectives and
        contributions.

        <br />
        <b>Promoting Equity and Inclusion:</b> NRCS is committed to promoting
        equity and inclusion, ensuring that all individuals, regardless of their
        differences, have equal access to opportunities and resources, and feel
        included in decision-making processes and programs.
      </div>
      <div class="border">
        <img src="Image/diversity.webp" alt="CPR" class="CPRdesc-img" />
      </div>

      <div class="border">
        <img src="Image/history.jpg" alt="CPR" class="CPRdesc-img" />
      </div>

      <div class="msg-margin">
        <label class="CPR-msg-head"><b>History</b></label
        ><br />
        <br />
        <label class="CPR-msg"></label>
        <b>Founding Principles:</b> The Nepal Red Cross Society was established
        with the fundamental principles of humanitarianism, neutrality,
        impartiality, independence, voluntary service, unity, and universality,
        aligning with the global Red Cross and Red Crescent Movement.
        <br />
        <b>Milestones and Impact:</b> Since its inception, NRCS has played a
        pivotal role in providing humanitarian assistance and promoting
        community resilience across Nepal, responding to natural disasters,
        health crises, and other emergencies, while also engaging in long-term
        development projects to improve the well-being of vulnerable
        populations.
      </div>
    </div>
    <?php include("footer.php");
  ?>
  </body>
</html>