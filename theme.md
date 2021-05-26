
# understanding the theme

To provide the jazz club site with indentity and accurately expressing the clients needs/goals for the club website, a custom theme was built using the "Underscores" starter theme. this provided the team with a basic starting point, and a stand alone theme that won't become obselete. 

## underscores features

underscores provides the basic functionality for a theme to get started quickly. when initially downloaded it included well-commented website files to enable quick adjustments of the theme where needed. Some things to consider when editing the theme.

it is important to read the inline documentation available in the comment of each file. the inline comments also provide a way of navigating inside the document for example, finding section in the styles.css file.

the header.php and footer.php files control the wrapping around the content. 

the style.css file in located in the jazz_theme folder under the wp-content folder (the first "jazz_theme" folder). Here you can edit the presentation of the website.

## Editing the styles sheet

minimalistic design with contrasting colors i.e. black with a white background, is used with intent of reaching younger audiences/improve readability of key information. gold accent have been used inline with the clients request. The style.css file of the theme provides the ability to adhear to this design. The style.css file is well organised into sections related to the part of the website that is being adjusted. 

the document is well commented with inline comments, enabling the developer to find what needs to be edited quickly. for example; to edit the navigation section of the website you can scroll down (or use crt+f) to find an incline comment (Navigation). this will point to the section of css code related.

by using the browser inspector much time was saved to find class attributes that is in need of some style changes. Much off the afore mentioned sections of the website are conveniently defined as class attributes. This makes editing the styles of elements on the website a quick process as they point to a class in the syle sheet.

## Header and footer adjustments 

Adjuments to the header of the website can be made in the header.php file in the jazz_theme folder. here the site_logo was moved to within the navigation menu section allow the logo to appear inline with the menu bar.

orginally underscores did not provide a footer section, thus one was added using the functions.php and footer.php files. This was done in the form of a widget in the funstions.php file. Thus, in the wordpress admin dashboard editting of this footer is done in the widget section in appearance.




