<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="website icon" type="png" href="Image/american-red-cross-logo-transparent-21.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Aid Training</title>
</head>
<body>
    <?php include("nav.php");
    ?>

<br><br>

    

    <div class="Cover">
        <div>
            <label class="Firstaid-img-head">RED CROSS TRAINIG FOR INDIVIDUALS</label><br>
            <label class="Firstaid-img-messege"><b>FIRST AID TRAINING</b></label><br>
            <label class="Firstaid-img-note"><b>BE READY AND BE TRAINED</b></label>
        </div>
            <div class="button-box">
                <label class="location"><b>Recently available classes</b></label>
                <select id="type" class="location-dropbox">
                    <option value="Physical">Physical Class</option>
                    <option value="Virtual">Virtual Class</option>
                </select>

                <label class="location"><b>Location of classes</b></label>
                <select id="location" class="location-dropbox">
                    <option value="Kathmandu">Kathmandu</option>
                    <option value="Bhaktapur">Bhaktapur</option>
                    <option value="Lalitpur">Lalitpur</option>
                    <option value="Kavre">Kavre</option>
                    <option value="Dhading">Dhading</option>
                    <option value="Pokhara">Pokhara</option>
                    <option value="Nepaljung">Nepaljung</option>
                </select>
            </div>
    </div>

    <div class="firstaid-container">
        <label class="firstaid-head"><b>First Aid</b></label>
        <div class="firstaid-body-container"> 
        <label class="firstaid-body">First aid refers to the initial assistance or care given to a person who has been injured or suddenly taken ill before professional medical help arrives. The primary goals of first aid are to preserve life, prevent the condition from worsening, and promote recovery. It involves providing immediate and basic medical care using minimal equipment and resources.</label>
    </div>
</div>

<div class="firstaid-perform-grid">
    <div>
        <img src="Image/firstaid-training.jpg" alt="firstaid-training" class="firstaidtraining-img">
    </div>
    <div class="firstaid-perform-contents">
        <label class="firstaidtraining-head"><b>First Aid Training</b></label><br>
        
        <label class="firstaidtraining-body">
            First aid training is a structured educational program designed to teach individuals how to provide immediate assistance and basic medical care to someone who has been injured or suddenly taken ill. The training equips participants with the knowledge and skills needed to assess a situation, respond appropriately, and offer initial care until professional medical help arrives. First aid training is typically conducted by certified instructors and covers a range of topics, including but not limited to Primary assesment, Cardiopulmonary Resuscitation (CPR), AED (Automated External Defibrillator) Use,Choking Relief, Bleeding Control, Shock Management, Burn Care, Fracture and Sprain care, Seizure Management, Allegric Reaction, Medical Emergencies, Injury Prevention etc</label>
    </div>

    <div class="Performing-first-aid">
        <label class="firstaidtraining-head"><b>Performing First Aid</b></label>
        <label class="firstaidtraining-body">
            Performing first aid effectively involves assessing the situation, ensuring your safety and the safety of others, and providing appropriate care until professional medical help arrives. Here are some general steps to follow:
        </label><br>
        <label class="firstaidtraining-body"> 1. Assess the Situation</label><br>
        <label class="firstaidtraining-body">2. Check for Responsiveness</label><br>
        <label class="firstaidtraining-body">3. Open the Airway</label><br>
        <label class="firstaidtraining-body">4. Check for Breathing</label><br>
        <label class="firstaidtraining-body">5. Control Bleeding</label><br>
        <label class="firstaidtraining-body">6. Treat for Shock</label><br>
        <label class="firstaidtraining-body">7. Immobilize Injuries </label><br>
        <label class="firstaidtraining-body"> 8. Provide Comfort and Reassurance</label><br>
        <label class="firstaidtraining-body">9. Monitor Vital Signs</label>

    </div>
    <div>
        <img src="Image/performing-firstaid.webp" alt="" class="firstaidtraining-img">
    </div>

</div>


    <style>

        .Cover{
            background-image: url(Image/Firstaidcover.jpg);
            background-size: 100% 40rem;
            background-repeat: no-repeat;
            height: 20rem;
            width: 80%;
            margin-left: 9rem;
            margin-top: 2rem;
            padding-top: 2rem;
        }
    
        .Firstaid-img-head{
            color: red;
            font-family: Poppins;
            font-size: 18px;
            padding-left: 5rem;
        }
    
        .Firstaid-img-messege{
            font-family: Poppins;
            font-size: 40px;
            padding-left: 5rem;
            color: white;
        }
    
        .Firstaid-img-note{
            color: white;
            font-family: Poppins;
            font-size: 30px;
            padding-left: 5rem;  
        }

        .firstaid-container{
            padding-top: 2rem;
            width: 80%;
            height: auto;
            margin-left: 9rem;
            background-color: #e5e5e5e5;
            text-align: center;
        }

        .firstaid-head{
            display: grid;
            justify-content: center;
            font-size: 45px;
        }   
        
        .firstaid-body-container{
            margin-left: 2rem;
            margin-right: 2rem;
            padding-top: 1rem;
        }

        .firstaid-body{
            color: rgb(70, 70, 70);
            font-size: 18px;
        }

        .firstaid-perform-grid{
            display: grid;
            grid-template-columns: 1fr 1fr ;
            grid-template-rows: 1fr 1fr;
            column-gap: 1rem;
            row-gap: 1rem;
            padding-top: 2rem;
            margin-left: 6rem;
            margin-right: 6rem;
            background-color: #e5e5e5e5;
            padding-left: 2rem;
            padding-right: 2rem;
            padding-bottom: 2rem;
        }

        .firstaidtraining-img{
            height: 35rem;
            width: 100%;
        }

        .firstaid-perform-contents{
            /* text-align: center; */
            padding-top: 4rem;
        }
        
        .firstaidtraining-head{
            font-size: 35px;
            display: grid;
            justify-content: center;
        }

        .firstaidtraining-body{
            color: rgb(49, 48, 48);
            font-size: 18px;
        }

        .Performing-first-aid{
            text-align: left;
        }
        </style>
      <?php include("footer.php");
  ?>
</body>
</html>