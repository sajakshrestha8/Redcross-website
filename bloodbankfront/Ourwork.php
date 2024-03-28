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
  
  <br /><br />

    <div class="requirement-background">
      <!-- Health slogan by Mr. SAJAK SHRESTHA -->
      <label class="requirement-head"
        ><strong>Disaster Relief </strong> <br />All day, every day, wherever
        someone needs us​.</label
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

      .grid1 {
        margin-left: 2rem;
        margin-right: 2rem;
        margin-top: 2rem;
      }
      .workhead {
        font-family: Poppins;
        display: flex;
        justify-content: center;
        font-size: 25px;
        margin-left: 10rem;
        margin-top: 2rem;
      }
      .workbody {
        font-family: Poppins;
        font-size: 20px;
        margin-top: 2rem;
        margin-left: 5rem;
        margin-right: 5rem;
        text-align: center;
      }
      .work-msg {
        font-family: Poppins;
        font-size: 18px;
      }
      .work-msg-margin {
        padding-left: 1rem;
      }

      .work-msg-head {
        font-family: Poppins;
        font-size: 30px;
        padding-left: 5rem;
      }
      .grid1 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr 1fr 1fr;
        column-gap: 2rem;
        row-gap: 2rem;
        justify-content: center;
        align-items: center;
        /* border: 2px red solid; */
      }
    </style>

    <div class="workhead">
      <label><b>We're there when people need us most</b></label
      ><br />
    </div>

    <div class="workbody">
      <label
        ><strong></strong> Our purpose is to meet the immediate disaster-caused
        needs of individuals, families, and communities. Explore how we respond
        to disasters big and small, across the country.</label
      >
    </div>

    <div class="grid1">
      <div class="border">
        <img src="Image/disaster-relief.webp" alt="CPR" class="CPRdesc-img" />
      </div>
      <div class="work-msg-margin">
        <label class="work-msg-head"><b>Disaster Relief</b></label
        ><br />
        <br />
        <label class="work-msg"
          ><b>Rapid Response:</b> The Nepal Red Cross Society (NRCS) is at the
          forefront of disaster relief efforts, providing immediate assistance
          to affected communities in the aftermath of natural disasters such as
          earthquakes, floods, and landslides, offering shelter, food, water,
          and medical care to those in need. <br /><br />

          <b>Community Resilience:</b>NRCS not only responds to emergencies but
          also focuses on building community resilience through preparedness
          initiatives, risk reduction strategies, and capacity-building
          programs, empowering communities to better withstand and recover from
          disasters.
          <br />
        </label>
      </div>

      <div class="work-msg-margin">
        <label class="work-msg-head"><b>Lifesaving Blood:</b></label
        ><br /><br />
        <br />
        <label class="CPR-msg"
          ><b>Critical Blood Supply:</b> NRCS operates blood donation drives and
          blood banks nationwide, ensuring a stable and sufficient supply of
          lifesaving blood and blood products for patients in need of
          transfusions, contributing to saving countless lives across Nepal.
          <br /><br />
          <b>Quality Assurance: </b>Through stringent quality control measures
          and adherence to international standards, NRCS ensures the safety,
          efficacy, and availability of blood products, maintaining the trust of
          both donors and recipients in the blood donation process. </label
        ><br />
      </div>

      <div>
        <img src="Image/livesavingblood.avif" alt="bloodpng" class="CPRdesc-img" />
      </div>

      <div class="border">
        <img src="Image/training-and-certification.webp" alt="CPR" class="CPRdesc-img" />
      </div>
      <div class="work-msg-margin">
        <label class="work-msg-head"><b>Training & Certification:</b></label
        ><br />
        <br />
        <label class="CPR-msg"></label>
        <b>Skills Development:</b> NRCS offers comprehensive training and
        certification programs in first aid, disaster preparedness, and
        community health, equipping volunteers, healthcare professionals, and
        community members with essential lifesaving skills and knowledge.
        <br />
        <b>Capacity Building:</b> By providing training and certification
        opportunities, NRCS strengthens the capacity of individuals and
        communities to respond effectively to emergencies, promote public
        health, and contribute to the overall well-being of society, fostering a
        culture of preparedness and resilience.
      </div>
    </div>
    <?php include("footer.php");
  ?>
  </body>
</html>