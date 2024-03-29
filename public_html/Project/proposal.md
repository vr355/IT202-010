# Project Name: Simple Bank

## Project Summary: This project will create a bank simulation for users. They’ll be able to have various accounts, do standard bank functions like deposit, withdraw, internal (user’s accounts)/external(other user’s accounts) transfers, and creating/closing accounts.

## Github Link: (Prod Branch of Project Folder)

## Project Board Link: https://github.com/vr355/IT202-010/projects/1

## Website Link: (Heroku Prod of Project folder)

## Your Name: Virendra Raj

<!-- Line item / Feature template (use this for each bullet point) -- DO NOT DELETE THIS SECTION


- [x]  \(mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  Link to related .md file: [Link Name](link url)

 End Line item / Feature Template -- DO NOT DELETE THIS SECTION -->

### Proposal Checklist and Evidence

- [x] \(04/06/2022) Milestone 1
  - [x] \(03/05/2022) User will be able to register a new account
  - [Milestone 1](https://github.com/vr355/IT202-010/blob/Milestone1/public_html/Project/milestone1.md)
  - [https://vr355-prod.herokuapp.com/Project/register.php](https://vr355-prod.herokuapp.com/Project/register.php)
    - [x] \(03/05/2022) Form Fields
      - [x] \(03/05/2022) Username, email, password, confirm password(other fields optional)
      - [x] \(03/05/2022) Email is required and must be validated
      - [x] \(03/05/2022) Username is required
      - [x] \(03/05/2022) Confirm password’s match
    - [x] \(03/05/2022) Users Table
      - [x] \(03/05/2022) Id, username, email, password (60 characters), created, modified
    - [x] \(03/05/2022) Password must be hashed (plain text passwords will lose points)
    - [x] \(03/05/2022) Email should be unique
    - [x] \(03/05/2022) Username should be unique
    - [x] \(03/05/2022) System should let user know if username or email is taken and allow the user to correct the error without wiping/clearing the form
      - [x] \(03/05/2022) The only fields that may be cleared are the password fields
- [x] \(03/05/2022) User will be able to login to their account (given they enter the correct credentials)
- [Milestone 1](https://github.com/vr355/IT202-010/blob/Milestone1/public_html/Project/milestone1.md)
- [https://vr355-prod.herokuapp.com/Project/login.php](https://vr355-prod.herokuapp.com/Project/login.php)

  - [x] \(03/05/2022) Form
    - [x] \(03/05/2022) User can login with email or username
      - [x] \(03/05/2022) This can be done as a single field or as two separate fields
    - [x] \(03/05/2022) Password is required
  - [x] \(03/05/2022) User should see friendly error messages when an account either doesn’t exist or if passwords don’t match
  - [x] \(03/05/2022) Logging in should fetch the user’s details (and roles) and save them into the session.
  - [x] \(03/05/2022) User will be directed to a landing page upon login
    - [x] \(03/05/2022) This is a protected page (non-logged in users shouldn’t have access)
    - [x] \(03/05/2022) This can be home, profile, a dashboard, etc

- [x] \(03/05/2022) User will be able to logout
- [Milestone 1](https://github.com/vr355/IT202-010/blob/Milestone1/public_html/Project/milestone1.md)
- [https://vr355-prod.herokuapp.com/Project/logout.php](https://vr355-prod.herokuapp.com/Project/logout.php)

  - [x] \(03/05/2022) Logging out will redirect to login page
  - [x] \(03/05/2022) User should see a message that they’ve successfully logged out
  - [x] \(03/05/2022) Session should be destroyed (so the back button doesn’t allow them access back in)

- [x] \(03/10/2022) Basic security rules implemented
- [Milestone 1](https://github.com/vr355/IT202-010/blob/Milestone1/public_html/Project/milestone1.md)
- [https://vr355-prod.herokuapp.com/Project/profile.php](https://vr355-prod.herokuapp.com/Project/profile.php)

  - [x] \(03/10/2022) Authentication:
    - [x] \(03/10/2022) Function to check if user is logged in
    - [x] \(03/10/2022) Function should be called on appropriate pages that only allow logged in users
  - [x] \(03/10/2022) Roles/Authorization:
    - [x] \(03/10/2022) Have a roles table (see below)

- [x] \(03/13/2022) Basic Roles implemented
- [Milestone 1](https://github.com/vr355/IT202-010/blob/Milestone1/public_html/Project/milestone1.md)
- [https://vr355-prod.herokuapp.com/Project/admin/create_roles.php](https://vr355-prod.herokuapp.com/Project/admin/create_roles.php)

  - [x] \(03/13/2022) Have a Roles table (id, name, description, is_active, modified, created)
  - [x] \(03/13/2022) Have a User Roles table (id, user_id, role_id, is_active, created, modified)
  - [x] \(03/13/2022) Include a function to check if a user has a specific role (we won’t use it for this milestone but it should be usable in the future)

- [x] \(03/13/2022) Site should have basic styles/theme applied; everything should be styled
- [Milestone 1](https://github.com/vr355/IT202-010/blob/Milestone1/public_html/Project/milestone1.md)
- [https://vr355-prod.herokuapp.com/Project/home.php](https://vr355-prod.herokuapp.com/Project/home.php)
  - [x] \(03/13/2022) I.e., forms/input, navigation bar, etc
- [x] \(03/13/2022) Any output messages/errors should be “user friendly”
- [Milestone 1](https://github.com/vr355/IT202-010/blob/Milestone1/public_html/Project/milestone1.md)
- [https://vr355-prod.herokuapp.com/Project/logout.php](https://vr355-prod.herokuapp.com/Project/logout.php)
  - [x] \(03/13/2022) Any technical errors or debug output displayed will result in a loss of points
- [x] \(03/18/2022) User will be able to see their profile
- [Milestone 1](https://github.com/vr355/IT202-010/blob/Milestone1/public_html/Project/milestone1.md)
- [https://vr355-prod.herokuapp.com/Project/profile.php](https://vr355-prod.herokuapp.com/Project/profile.php)
  - [x] \(03/18/2022) Email, username, etc
- [x] \(04/06/2022) User will be able to edit their profile
- [Milestone 1](https://github.com/vr355/IT202-010/blob/Milestone1/public_html/Project/milestone1.md)
- [https://vr355-prod.herokuapp.com/Project/profile.php](https://vr355-prod.herokuapp.com/Project/profile.php)

  - [x] \(04/06/2022) Changing username/email should properly check to see if it’s available before allowing the change
  - [x] \(04/06/2022) Any other fields should be properly validated
  - [x] \(04/06/2022) Allow password reset (only if the existing correct password is provided)
    - [x] \(04/06/2022) Hint: logic for the password check would be similar to login

- Milestone 2

  - [x] \(04/22/2022) Create the Accounts table (id, account_number [unique, always 12 characters], user_id, balance (default 0), account_type, created, modified)
    - [Milestone 2](https://github.com/vr355/IT202-010/blob/Milestone2/public_html/Project/milestone2.md)
    - [https://vr355-prod.herokuapp.com/Project/accounts.php](https://vr355-prod.herokuapp.com/Project/accounts.php)
  - [x] \(04/22/2022) Project setup steps:
    - [x] Create these as initial setup scripts in the sql folder
      - [x] Create a system user if they don’t exist (this will never be logged into, it’s just to keep things working per system requirements)
        - [x] Hint, id should be a negative value
    - [x] Create a world account in the Accounts table created below (if it doesn’t exist)
      - [x] Account_number must be “000000000000”
      - [x] User_id must be the id of the system user
      - [x] Account type must be “world”
    - [Milestone 2](https://github.com/vr355/IT202-010/blob/Milestone2/public_html/Project/milestone2.md)
    - [https://vr355-prod.herokuapp.com/Project/accounts.php](https://vr355-prod.herokuapp.com/Project/accounts.php)
  - [x] \(04/22/2022) Create the Transactions table (see reference at end of document)
    - [x] Id, created, modified, account_src, account_dest, balance_change, transaction_type, memo, expected_total, created, modified
    - [Milestone 2](https://github.com/vr355/IT202-010/blob/Milestone2/public_html/Project/milestone2.md)
    - [https://vr355-prod.herokuapp.com/Project/accounts.php](https://vr355-prod.herokuapp.com/Project/accounts.php)
  - [x] \(04/22/2022) Dashboard page
    - [x] Will have links for Create Account, My Accounts, Deposit, Withdraw Transfer, Profile
      - [x] Links that don’t have pages yet should just have href=”#”, you’ll update them later
    - [Milestone 2](https://github.com/vr355/IT202-010/blob/Milestone2/public_html/Project/milestone2.md)
    - [https://vr355-prod.herokuapp.com/Project/dashboard.php](https://vr355-prod.herokuapp.com/Project/dashboard.php)
  - [x] \(04/22/2022) User will be able to create a checking account
    - [x] System will generate a unique 12 digit account number
      - [x] Options (strike out the option you won’t do):
        - [x] Option 1: Generate a random 12 digit/character value; must regenerate if a duplicate collision occurs
        - [x] Option 2: Generate the number based on the id column; requires inserting a null first to get the last insert id, then update the record immediately after
    - [x] System will associate the account to the user
    - [x] Account type will be set as checking
    - [x] Will require a minimum deposit of $5 (from the world account)
      - [x] Entry will be recorded in the Transaction table as a transaction pair (per notes at end of document)
      - [x] Account Balance will be updated based on SUM of balance_change of account_src
        - [x] Do not set this value directly
    - [x] User will see user-friendly error messages when appropriate
    - [x] User will see user-friendly success message when account is created successfully
      - [x] Redirect user to their Accounts page upon success
    - [Milestone 2](https://github.com/vr355/IT202-010/blob/Milestone2/public_html/Project/milestone2.md)
  - [x] \(04/22/2022) User will be able to list their accounts
    - [x] Limit results to 5 for now
    - [x] Show account number, account type, modified, and balance
    - [Milestone 2](https://github.com/vr355/IT202-010/blob/Milestone2/public_html/Project/milestone2.md)
    - [https://vr355-prod.herokuapp.com/Project/create_account.php](https://vr355-prod.herokuapp.com/Project/create_account.php)
    - [https://vr355-prod.herokuapp.com/Project/accounts.php](https://vr355-prod.herokuapp.com/Project/accounts.php)
  - [x] \(04/22/2022) User will be able to click an account for more information (a.k.a Transaction History page)
    - [x] Show account number, account type, balance, opened/created date of the selected account
    - [x] Show transaction history (from Transactions table)
      - [x] For now limit results to 10 latest
      - [x] Show the src/dest accounts, the transaction type, the change in balance, when it occurred, expected total, and the memo
    - [Milestone 2](https://github.com/vr355/IT202-010/blob/Milestone2/public_html/Project/milestone2.md)
    - [https://vr355-prod.herokuapp.com/Project/account_history.php](https://vr355-prod.herokuapp.com/Project/account_history.php)
  - [x] \(04/22/2022) User will be able to deposit/withdraw from their account(s)
    - [x] Form should have a dropdown of their accounts to pick from
      - [x] World account should not be in the dropdown as it’s not owned by anyone
    - [x] Form should have a field to enter a positive numeric value
      - [x] For now, allow any deposit value (1 - inf)
    - [x] For withdraw, add a check to make sure they can’t withdraw more money than the account has
    - [x] Form should allow the user to record a memo for the transaction
    - [x] Each transaction is recorded as a transaction pair in the Transaction table per the details below and at the end of the document
      - [x] These will reflect on the transaction history page (Account page’s “more info”)
      - [x] After each transaction pair, make sure to update the Account Balance by SUMing the balance_change for the account_src
        - [x] This will be done after the insert
      - [x] Deposits will be from the “world account”
        - [x] If the world account is using a positive id you must fetch the world account’s id (do not hard code the id as it may change if the application migrates or gets rebuilt)
        - [x] If using a negative value and you’re sure it won’t change across migrations you can hard code it but label (via a comment) what it refers to
      - [x] Withdraws will be to the “world account”
        - [x] If the world account is using a positive id you must fetch the world account’s id (do not hard code the id as it may change if the application migrates or gets rebuilt)
        - [x] If using a negative value and you’re sure it won’t change across migrations you can hard code it but label (via a comment) what it refers to
      - [x] Transaction type should show accordingly (deposit/withdraw)
      - [x] Calculate what the expected total would be for each account of the transaction pair
    - [Milestone 2](https://github.com/vr355/IT202-010/blob/Milestone2/public_html/Project/milestone2.md)
    - [https://vr355-prod.herokuapp.com/Project/transactions.php?type=deposit](https://vr355-prod.herokuapp.com/Project/transactions.php?type=deposit)
    - [https://vr355-prod.herokuapp.com/Project/transactions.php?type=withdraw](https://vr355-prod.herokuapp.com/Project/transactions.php?type=withdraw)
    - [https://vr355-prod.herokuapp.com/Project/transactions.php?type=transfer](https://vr355-prod.herokuapp.com/Project/transactions.php?type=transfer)
    - [x] \(04/22/2022) Show appropriate user-friendly error messages
      - [Milestone 2](https://github.com/vr355/IT202-010/blob/Milestone2/public_html/Project/milestone2.md)
      - [https://vr355-prod.herokuapp.com/Project/transactions.php?type=deposit](https://vr355-prod.herokuapp.com/Project/transactions.php?type=deposit)
    - [x] \(04/22/2022) Show user-friendly success messages
      - [Milestone 2](https://github.com/vr355/IT202-010/blob/Milestone2/public_html/Project/milestone2.md)
      - [https://vr355-prod.herokuapp.com/Project/transactions.php?type=deposit](https://vr355-prod.herokuapp.com/Project/transactions.php?type=deposit)

- Milestone 3

  - [x] \(04/22/2022) User will be able to transfer between their accounts

    - [x] \(04/22/2022) Form should include a dropdown first account_src and a dropdown for account_dest (only accounts the user owns; no world account)
    - [x] \(04/22/2022) Form should include a field for a positive numeric value
    - [x] \(04/22/2022) System shouldn’t allow the user to transfer more funds than what’s available in account_src
    - [x] \(04/22/2022) Form should allow the user to record a memo for the transaction
    - [x] \(04/22/2022) Each transaction is recorded as a transaction pair in the Transaction table
      - [x] \(04/22/2022) These will reflect in the transaction history page
    - [x] \(04/22/2022) Show appropriate user-friendly error messages
    - [x] \(04/22/2022) Show user-friendly success messages
    - [Milestone 3](https://github.com/vr355/IT202-010/blob/Milestone2/public_html/Project/milestone3.md)
    - [https://vr355-prod.herokuapp.com/Project/transactions.php?type=transfer](https://vr355-prod.herokuapp.com/Project/transactions.php?type=transfer)

  - [x] \(05/12/2022) Transaction History page
    - [x] \(05/12/2022) Will show the latest 10 transactions by default
    - [x] \(05/12/2022) User will be able to filter transactions between two dates
    - [x] \(05/12/2022) User will be able to filter transactions by type (deposit, withdraw, transfer)
    - [x] \(05/12/2022) Transactions should paginate results after the initial 10
    - [Milestone 3](https://github.com/vr355/IT202-010/blob/Milestone2/public_html/Project/milestone3.md)
    - [https://vr355-prod.herokuapp.com/Project/transactions.php?type=transfer](https://vr355-prod.herokuapp.com/Project/transactions.php?type=transfer)
  - [x] \(05/12/2022) User’s profile page should record/show First and Last name

    - [Milestone 3](https://github.com/vr355/IT202-010/blob/Milestone2/public_html/Project/milestone3.md)
    - [https://vr355-prod.herokuapp.com/Project/transactions.php?type=transfer](https://vr355-prod.herokuapp.com/Project/transactions.php?type=transfer)

  - [x] \(05/12/2022) User will be able to transfer funds to another user’s account
    - [x] \(05/12/2022) Form should include a dropdown of the current user’s accounts (as account_src)
    - [x] \(05/12/2022) Form should include a field for the destination user’s last name
    - [x] \(05/12/2022) Form should include a field for the last 4 digits of the destination user’s account number (to lookup AccountDest)
    - [x] \(05/12/2022) Form should include a field for a positive numerical value
    - [x] \(05/12/2022) Form should allow the user to record a memo for the transaction
    - [x] \(05/12/2022) System shouldn’t let the user transfer more than the balance of their account
    - [x] \(05/12/2022) System will lookup appropriate account based on destination user’s last name and the last 4 digits of the account number
    - [x] \(05/12/2022) Show appropriate user-friendly error messages
    - [x] \(05/12/2022) Show user-friendly success messages
    - [x] \(05/12/2022) Transaction will be recorded with the type as “ext-transfer”
    - [x] \(05/12/2022) Each transaction is recorded as a transaction pair in the Transaction table
      - [x] \(05/12/2022) These will reflect in the transaction history page
    - [Milestone 3](https://github.com/vr355/IT202-010/blob/Milestone2/public_html/Project/milestone3.md)
    - [https://vr355-prod.herokuapp.com/Project/transactions.php?type=transfer](https://vr355-prod.herokuapp.com/Project/transactions.php?type=transfer)

- Milestone 4
  - (duplicate template here for Milestone 1 features)
  -

### Intructions

#### Don't delete this

1. Pick one project type
2. Create a proposal.md file in the root of your project directory of your GitHub repository
3. Copy the contents of the Google Doc into this readme file per the template
4. Convert the list items to markdown checkboxes (apply any other markdown for organizational purposes)
5. Create a new Project Board on GitHub
   - Choose the Automated Kanban Board Template
   - For each major line item (or sub line item if applicable) create a GitHub issue
   - The title should be the line item text
   - The first comment should be the acceptance criteria (i.e., what you need to accomplish for it to be "complete")
   - Leave these in "to do" status until you start working on them
   - Assign each issue to your Project Board (the right-side panel)
   - Assign each issue to yourself (the right-side panel)
6. As you work
7. As you work on features, create separate branches for the code in the style of Feature-ShortDescription (using the Milestone# branch as the source to branch from and to merge into)
8. Add, commit, push the related file changes to this branch
9. Add evidence to the PR (Feat to Milestone) conversation view comments showing the feature being implemented (these will be used to populate the related .md files for each milestone, forgetting to capture this will give you more work later on)
   - Screenshot(s) of the site view (make sure they clearly show the feature)
   - Screenshot of the database data if applicable
   - Describe each screenshot to specify exactly what's being shown
   - A code snippet screenshot or reference via GitHub markdown may be used as an alternative for evidence that can't be captured on the screen
10. Update the checklist of the proposal.md file for each feature this branch is completing (ideally should be 1 branch/pull request per feature, but some cases may have multiple)

    - Basically add an x to the checkbox markdown along with a date after
      - (i.e., - [x] (mm/dd/yy) ....) See Template above
    - Add the pull request link as a new indented line for each line item being completed
    - Attach any related issue items on the right-side panel

11. Merge the Feature Branch into your Milestone branch (this should close the pull request and the attached issues)

    - Merge the Milestone branch into dev, then dev into prod as needed (be sure it doesn't break anything in prod)
    - Last two steps are mostly for getting it to prod for delivery of the assignment

12. If the attached issues don't close wait until the next step
13. Merge the updated dev branch into your production branch via a pull request
14. Close any related issues that didn't auto close

    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board
