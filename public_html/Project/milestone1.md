<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Virendra Raj(vr355)</td></tr>
<tr><td> <em>Generated: </em> 4/11/2022 12:40:12 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone1-deliverable/grade/vr355" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone1 branch</li>
<li>Create a milestone1.md file in your Project folder</li>
<li>Git add/commit/push this empty file to Milestone1 (you&#39;ll need the link later) </li>
<li>Fill in the deliverable items<ol>
<li>For the proposal.md file use the direct link to milestone1.md from the Milestone1 branch for all of the features  </li>
<li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e, <a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li>
</ol>
</li>
<li>Ensure your images display correctly in the sample markdown at the bottom</li>
<li>Save the submission items</li>
<li>Copy/paste the markdown from the &quot;Copy markdown to clipboard link&quot;</li>
<li>Paste the code into the milestone1.md file</li>
<li>Git add/commit/push the md file to Milestone1</li>
<li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li>
<li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Make a pull request from dev to prod (resolve any conflicts) <ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li>
</ol>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/161877732-bc4b62ce-2b40-4c6b-90cb-ce12c9ce17c3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing password mismatch error<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/161877884-5fbbfb33-c33e-4a5b-b4e5-ffbd291b8b3d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing multiple errors<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/161877934-2b160094-bb19-4e48-9e84-9dbaee8890f7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing register success<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/161878258-da8c67bf-b9e5-4edd-bbe6-39190827b8d6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing users table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vr355/IT202-010/pull/26">https://github.com/vr355/IT202-010/pull/26</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>We implemented registration feature by creating/updating users table. Do validations and check registration<br>form is valid before submitting. On server side data is again validated and<br>in case of errors we show flash messages<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/161878969-d23ca17a-a6c2-415c-adac-6df5b61d67ab.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing login before error<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/161879004-5bffc510-76b1-4d4d-897b-c14ad3a255ca.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing invalid password<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/161879042-dd2e8b85-ed25-4f57-ad34-331bb7f14f04.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing login success<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vr355/IT202-010/pull/26">https://github.com/vr355/IT202-010/pull/26</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>User input username/email and password. The data is validated on client side if<br>username is valid(valid email and username) and password.<br>Client&#39;s Validated data is sent to<br>server where it is checked if username and password exists. If we find<br>a record with username and password provided, login is success otherwise false. We<br>redirect to home page in case of success and show flash message in<br>case of error.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/161879706-05abcdcc-aa48-4dbe-9d53-16354c88b2be.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing logout message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/161879755-9d0f65c6-2fd1-478f-98be-98c2d3105394.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Try to access protected page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vr355/IT202-010/pull/26">https://github.com/vr355/IT202-010/pull/26</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>Added a check on protected page where it checked if user if logged<br>in before accessing the contents of protected page. If user is not logged<br>in, we redirect the user to login page and show a warning message.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/161879755-9d0f65c6-2fd1-478f-98be-98c2d3105394.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Try to access protected page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page (a test/dummy page is fine)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/161880376-dc748ec5-f745-47fe-9cfc-e241ac3373e8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing cannot access role protected page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/161880693-26925c8d-3c9c-48f8-a238-d82dab95cbec.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing roles table data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/161880804-bada0d29-7d3c-46c2-b339-bafd8b5b91e4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing user roles table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vr355/IT202-010/pull/26">https://github.com/vr355/IT202-010/pull/26</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>We check if user has admin role, it can create, view and assign<br>roles. Standard users dont have access to the role protected pages<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>We check if user has admin role, it can create, view and assign<br>roles. Standard users dont have access to the role protected pages<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/161880804-bada0d29-7d3c-46c2-b339-bafd8b5b91e4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing basic styles<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vr355/IT202-010/pull/26">https://github.com/vr355/IT202-010/pull/26</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>I have add gray body color, made navigation links look like buttons and<br>give them a bit dark background. Input and labels are given some padding<br>to make them looks good on screen.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/161880376-dc748ec5-f745-47fe-9cfc-e241ac3373e8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing user friendly errors<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vr355/IT202-010/pull/26">https://github.com/vr355/IT202-010/pull/26</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>Style flash messages with different colors representing different states like green color for<br>success state, red for error, yellow for warning, teal for information.<br>Errors from server<br>side are checked and parsed to user friendly messages by interpreting the message.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/161882061-6a7d3964-eb80-414f-942e-d3b827aa89dc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User can see the profile<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vr355/IT202-010/pull/26">https://github.com/vr355/IT202-010/pull/26</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>We fetch the logged in user data and show it on profile page.<br>We only show email and username, not the passwords<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/161882664-4a88abdb-2347-41db-91ad-3b3eb7d0cd06.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing edit profile error<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/161882424-01683a5f-d5b8-4a5e-8a0d-5fd60325284e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing success message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/161878258-da8c67bf-b9e5-4edd-bbe6-39190827b8d6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing user data before profile edit<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/161882851-d2c166b6-2ce0-4016-9364-e228ee557219.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing user table after profile edit<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vr355/IT202-010/pull/26">https://github.com/vr355/IT202-010/pull/26</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>Password and username is validated before updating the table, If new username/email already<br>exists it will show error. Password reset only works if current password is<br>correct and new passwords matches<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Proposal and Issues </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/161876939-932447ad-9f50-4295-922c-78250c28f58f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing proposal file<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/161883612-80d0f608-71fb-40eb-b685-e24bf9c6b15c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing project board<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone1-deliverable/grade/vr355" target="_blank">Grading</a></td></tr></table>
