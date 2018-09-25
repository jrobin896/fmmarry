## FMMARY

FMMary (Find, Meet and Marry) is an online web application. Here you can find and meet your soulmate. You need to create an account on FMMary with the required details. FMMary will then use an algorithm (describred below) to find and rank the potentials profiles based on user likes and dislikes. 

### Tables

The project runs on only one table. The table name is "fmmarry".
#### Attribute Details
    username - field to store unique usernames of user (varchar, primary key)
    profile_for - field to store the relation of the user and the profile used for (varchar)     
    first_name - first name of the groom (varchar)
    last_name - last name of the groom (varchar)
    gender - gender of the groom (varchar)
    dob - date of birth of the groom (date)
    mail_id - email id of the groom (varchar)
    mobile_number - mobile number of the groom (varchar)
    password - password of the user (varchar)
    complexion - complexion scale of the groom (int)
    hobbies - hobbies of the groom (varchar)
    religion - religion of the groom (varchar)
    current_city - current city or residencial place (varchar)
    education - educational status of the groom (varchar)
    occupation - occupation of the groom (varchar)
    more_details - groom's bio (text)

### Ranking Algorithm
The ranking of suggested soulmates for the user is done by an algorithm based on user's preferential order.

#### Preference Order: 
User is given with 6 preference categories and he will be asked to order them according to his/her preference
The six categories are:
Religion
Date of Birth
Complexion
Hobbies
Current place
Native place
Mother tongue
Languages Known

- The suggestion will be displayed in descending order of a variable’s value i.e match_score.
- The variable match_score is calculated according to customer’s preference order.
- For all preference order there will be a weightage given known as pre_weight.
    For 1st preference, pre_weight=8
    For 2nd preference, pre_weight=7
    .
    .
    .
    For 8th preference, pre_weight=1

- Based on preference category match_score is calculated 
    - Religion – if matched for both the users then, match_score + = pre_weight
    - Date of Birth – match_score + = diff b/w DOB (in days) * pre_weight
    - Complexion – match_score + = diff in Complexion scale value * pre_weight
    - Hobbies – Since hobbies is a multi valued attribute
      On every match of hobbies match_score + = pre_weight
			OR
      match_score + = (No. of hobbies matched) * pre_weight
    - Current Place – if matched for both the users then, match_score + = pre_weight
    - Native Place – if matched for both the users then, match_score + = pre_weight
    - Mother Tongue – if matched for both the users then, match_score + = pre_weight
    - Language Known – same as hobbies field
      match_score + = (No. of languages in common) * pre_weight
