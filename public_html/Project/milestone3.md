<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 Bank Project</td></tr>
<tr><td> <em>Student: </em> Virendra Raj(vr355)</td></tr>
<tr><td> <em>Generated: </em> 5/13/2022 9:01:10 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone-3-bank-project/grade/vr355" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone3 branch </li>
<li>Create a new markdown file called milestone3.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone3.md link (from Milestone3) into the proposal.md file under each milestone3 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone3.md</li>
<li>Add/commit/push the changes to Milestone3</li>
<li>PR Milestone3 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 4</li>
<li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User will be able to transfer between their accounts </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of transfer page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/168005598-3c5172ab-74a8-4e92-bfb3-4222c31d9717.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Transfer page screenshot<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing dropdown values</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/168005743-11eab5c0-d44b-4479-8420-28a1dcc8c1c3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Dropdown of From account<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/168005818-94f1a155-a05b-4ece-96f9-8be5d110ff1a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Dropdown of To Account<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing user can't transfer more funds than they have</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/168005978-200023ef-233d-456b-bd2c-caa0f624313a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Cannot transfer more than deposited amount<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot showing user can't transfer to the same account</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/168006081-7500262a-c824-4e19-8c09-92c4bf953ee6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Cannot transfer to same account<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot showing you can't transfer an negative balance</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/168006185-ff78f297-b2cf-4e00-9282-cf244762323d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Cannot transfer negative balance<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot of the generated transaction history from the db</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/168006647-b7c84c15-7bcf-4299-9c24-f14549eeae0f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Transaction history table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a screenshot of the Accounts table showing both affected accounts</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/168007033-a6b40ab4-b3b0-499c-bf40-c1fe361a152d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Accounts table records<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 8: </em> Briefly explain the code process/flow of a transfer including how the accounts are fetched for the dropdowns</td></tr>
<tr><td> <em>Response:</em> <p>Flow of Transfer: <br>User will select transfering account, recieving account, amount and memo.<br>Application will apply some restriction checks and transfer amount to recieving accounts and<br>deduct same amount from transfering account.<br>Restrictions are:<br>i. Cannot transfer to same account<br>ii. Cannot<br>transfer more than they have<br>iii. cannot transfer negative amount</p><br><p>How accounts are fetched: Get<br>user id from session and call db account tables to fetch all the<br>accounts related to this user id.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 9: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vr355/IT202-010/pull/39">https://github.com/vr355/IT202-010/pull/39</a> </td></tr>
<tr><td> <em>Sub-Task 10: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://vr355-prod.herokuapp.com/Project/transaction.php?type=transfer">https://vr355-prod.herokuapp.com/Project/transaction.php?type=transfer</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Transaction History Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of transaction history page showing the new transfer transaction</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/168085521-7f0595cf-19bc-4a52-a4a6-9d156a0d880d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Transactions page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots demonstrating the filters and pagination</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/168098433-4fd66d7e-c3d8-4bb2-bd76-10278fb6d8e4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Screenshot of filter and pagination<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how the filters/pagination work</td></tr>
<tr><td> <em>Response:</em> <p>Pagination:<br>Fetch total rows of records to show, calculated the total pages by dividing<br>total records and records per page. Added a for loop which adds number<br>of pagination items equals to number of pages.</p><br><p>Filters:<br>Created a form with select and<br>date fields. on click modified the query with form paramters so it will<br>fetch records with form parameters too.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vr355/IT202-010/pull/41">https://github.com/vr355/IT202-010/pull/41</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://vr355-prod.herokuapp.com/Project/transaction.php?type=transfer">https://vr355-prod.herokuapp.com/Project/transaction.php?type=transfer</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's profile First name and Last name </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the user's profile with the new fields</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/166212070-e32729c0-d138-4e8b-bc0f-53d87185c3f6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>New Profile fields added<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vr355/IT202-010/pull/41">https://github.com/vr355/IT202-010/pull/41</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add link to profile page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://vr355-prod.herokuapp.com/Project/profile.php">https://vr355-prod.herokuapp.com/Project/profile.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to transfer funds to another user </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the external transfer page with filled in data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/168205839-5f3018c1-939e-4865-be30-e2f40cffa92b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>External Transfer<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot showing user can't send more than they have</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/168205967-0b7d4359-b919-42c6-a900-9e2a69e7c7b5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User cannot submit more than they have<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot showing they can't send a negative amount</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/168206069-9c37e346-b1dd-4498-aa7a-b4deacdc640e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Cannot submit negative balance<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add screenshot(s) showing message if a user doesn't exist and/or a destination account wasn't found</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/168206159-e77d522a-c6a4-4d9e-94ab-3887aa3edf6d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Account doesnt exist<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add screenshot of the transactions table showing the recorded transfer</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/168206273-b4b2c503-762f-47ca-884f-bd35d579d6a9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Transaction table screenshot<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add screenshot(s) showing the updated account balances</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/168206349-01ca964a-cd5a-4ea5-88cb-902c6fc857e6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Updated account balabce screenshot<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain the process of looking up the target user's account and the validation logic</td></tr>
<tr><td> <em>Response:</em> <p>Before transfer, validate if amount exist and is positive.  Then search the<br>user by last name if user is found, search the account with user<br>id and last four digit. If account is found then validate if user<br>that transfering the amount have enough fund in his account. If all is<br>validated then transfer the amount.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add pull request(s) url</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/vr355/IT202-010/pull/47">https://github.com/vr355/IT202-010/pull/47</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add link to transfer page from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://vr355-dev.herokuapp.com/Project/transaction.php?type=ext-transfer">https://vr355-dev.herokuapp.com/Project/transaction.php?type=ext-transfer</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone3.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/168207292-2619c529-de43-4dd5-be8b-a14c66a1812c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Proposal file screenshot<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone3 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/70603389/168208332-c01085b6-5924-4827-ab62-d60985265523.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Closed issues<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-010-S22/it202-milestone-3-bank-project/grade/vr355" target="_blank">Grading</a></td></tr></table>
