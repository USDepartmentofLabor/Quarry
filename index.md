---
layout: page
title: "Quarry - United States Department OF LABOR"
created: 1359560059
---
<!-- Banner/Splash -->
<div class="row">
    <div class="large-6 columns"> 
    	<br><br><br>
      <h2>Turn your databases into a single API with Quarry.</h2>
      <br>
      <div class="text-center">
      <a href="./get-started" class="button success "><strong>GET STARTED</strong></a>
      </div>
    </div>
    <div class="large-6 columns">
    <br><br>
      <div>
        <iframe width="470px" height="270px" src="img/quarry.gif" frameborder="0" class = "hide-for-small"></iframe>
      </div>
    </div>
  </div> 
  <div class = "row">
  <ul class="accordion hide-for-medium-up" data-accordion="" role="tablist">
  <li class="accordion-navigation">
    <a aria-expanded="true" href="#panel1d" role="tab" id="panel1d-heading" aria-controls="panel1d">Overview</a>
    <div id="panel1d" class="content" role="tabpanel" aria-labelledby="panel1d-heading">
			<h3 class = "text-left"><strong>FREE</strong></h3>
			<p class= "text-left">Without any strings attached. It's yours to try and use today!</p>
			<h3 class= "text-left"><strong>SECURE</strong></h3>
			<p class= "text-left">
			Built with NIST standards in
			mind. It's great for any federal,
			state or local organization that 
			needs to share publicly available
			data through an API.
			</p>
			<h3 class= "text-left"><strong>SUPPORTED</strong></h3>
			<p class= "text-left">We regularly provide updates and are here to help you.</p>			
      </div>
  </li>
  <li class="accordion-navigation">
    <a aria-expanded="false" href="#panel2d" role="tab" id="panel2d-heading" aria-controls="panel2d">Features</a>
    <div id="panel2d" class="content" role="tabpanel" aria-labelledby="panel2d-heading">
		<h2><strong>Database Support</strong></h2>
			<p>PostSQL - Version x or later</p>
			<p>DB2 - Version 5.2 or later</p>
			<p>Oracle - Version 9i or later</p>
			<p>MySQL - Version 4 or later</p>
			<p>MSSQL - Version 2010 or later</p>
		<h2><strong>Protect Your Data</strong></h2>
	  <p> Delegation - Give access to local database administrators to control what data is shared </p>
	  <p> Obfuscation - Make your table names human-friendly by hiding the technical details </p>
    <h2><strong>Ease of Use</strong></h2>
	  <h3>For Administrators</h3>
		<p>Administrative interface with forms-based interface for managing:</p>
			<p>Datasets</p>
			<p>API users</p>
			<p>Developer keys</p>	
		<h3>For Developers</h3>
		<p>
		  One stop shop for your organization's datasets
		  One API key works across all of your datasets
		  Software development kits for 8 languages & platforms
		</p>    
	</div>
  </li>
  <li class="accordion-navigation ">
    <a aria-expanded="false" href="#panel3d" role="tab" id="panel3d-heading" aria-controls="panel3d">Requirements</a>
    <div id="panel3d" class="content " role="tabpanel" aria-labelledby="panel3d-heading">
	  <p><strong>To run Quarry you’ll need:</strong></p>
       <p>A Debian based Linux distribution that has at least 5 GB of memory, two 2 gigabyte processors, and 20 gigabytes of free space.</p>
        <p>Access to a MySQL or Microsoft SQL server.</p>
        <p>Ability to download the <a href="
http://www.rackspace.com/knowledge_center/article/install-epel-and-additional-repositories-on-centos-and-red-hat
">REMI</a> and <a href=" 
http://www.rackspace.com/knowledge_center/article/install-epel-and-additional-repositories-on-centos-and-red-hat
">EPEL</a>  repositories.</p>
  	
	   <a href="https://github.com/USDepartmentofLabor/Quarry" class="button"><strong>Download Quarry</strong></a>	      </div>
  </li>
    <li class="accordion-navigation ">
    <a aria-expanded="false" href="#panel4d" role="tab" id="panel4d-heading" aria-controls="panel4d">Documentation</a>
    <div id="panel4d" class="content " role="tabpanel" aria-labelledby="panel4d-heading">
 <section role="tabpanel" aria-hidden="true" data-options="deep_linking:true; scroll_to_content: true" class="content panel documentation radius" id="panel2-4">
		<div id="wrap_manual">
			<!-- HIDE FOR NOW
			<ul>
				<li><a href="#Quarry_API_User_Manual">Quarry API User Manual</a></li>
				<li><a href="#Overview">Overview</a></li>
				<li><a href="#Product_Information">Product Information</a></li>			
				<li><a href="#Product_Features">Product Features</a></li>
				<li><a href="#User_Types">User Types</a></li>
				<li><a href="#User_Type_Hierarchical_Details">User Type Hierarchical Details</a></li>
				<li><a href="#Super_Administrators">Super Administrators</a></li>
				<li><a href="#Application_Managers">Application Managers</a></li>
				<li><a href="#Developers">Developers</a></li>
				<li><a href="#Consumers">Consumers</a></li>
				<li><a href="#User_Management">User Management</a></li>
				<li><a href="#User_Lifecycle_Flow">User Lifecycle Flow</a></li>
				<li><a href="#User_Policies">User Policies</a></li>
				<li><a href="#Permissions">Permissions</a></li>
				<li><a href="#Roles">Roles</a></li>
				<li><a href="#Quarry_API_Key_Management">Quarry API Key Management</a></li>
				<li><a href="#Creating_Quarry_API_Keys">Creating Quarry API Keys</a></li>
				<li><a href="#Quarry_API_Keys">Quarry API Keys</a></li>
				<li><a href="#Dataset_Service_Managemen">Dataset Service Management</a></li>
				<li><a href="#Supported_Database_Types">Supported Database Types</a></li>
				<li><a href="#Typical_Configuration_Sequence_of_Quarry_API_Data_Service">Typical Configuration Sequence of Quarry API Data Service</a></li>
				<li><a href="#Add_Data_Service">Add Data Service</a></li>
			</ul>
			-->
			<h1 id="Quarry_API_User_Manual">Quarry API User Manual</h1>
			<br>
			<h2 id="Overview">Overview</h2>
			<p>This document is an operational overview of the administrative interface for Quarry API.  Details will be provided on how to manage and publish datasets.</p>
			<h3 id = "Product_Information">Product Information</h3>
			<p>Quarry API is a convenient way to access DOL data and is designed using RESTful technology along with the user-friendly web 2.0 accessible layout. Therefore, the burden of data configuration, user management and RESTful API calls can be done with a less technically skilled staff.</p>
			<h3 id="Product_Features">Product Features</h3>
			<p>With Quarry API you can:</p>
			<ul>
				<li>Use any open web language to access data</li>
				<li>Obtain public datasets in JSON or XML formats</li>
				<li>Filter RESTful queries by key/pair parameters</li>
				<li>Run API CRUD (Create, Read, Update, and Delete) operations</li>
				<li>Conduct transactions via mobile device</li>
				<li>Add, edit, and delete users</li>
				<li>Add, edit, and delete user roles and permissions</li>
				<li>Add, edit, and delete Quarry API keys</li>
				<li>Add, edit, delete, and test data sources for DOL dataset retrieval</li>
			</ul>
			<h2 id="User_Types">User Types</h2>
			<div class="dsktp_tbl">
				<table summary="Quarry API User Roles, which contains user type, definition, and technical proficiency fields">
					<caption>Quarry API User Roles</caption>
					<thead>
						<tr>
							<th scope="col">User Type</th>
							<th scope="col">Definition</th>
							<th scope="col">Technical Proficiency</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">Super Administrators (<b>Highest category</b>)</th>
							<td>Performs user and API management</td>
							<td>LOW</td>
						</tr>
						<tr>
							<th scope="row">Application Managers</th>
							<td>Manages how data is configured and propagated</td>
							<td>MID</td>
						</tr>
						<tr>
							<th scope="row">Developers</th>
							<td>Maintains the interface and writes applications</td>
							<td>HIGH</td>
						</tr>
						<tr>
							<th scope="row">Consumers</th>
							<td>End users</td>
							<td>LOW</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="mbl_tbl">
				<h3 id="Quarry_API_User_Roles">Quarry API User Roles</h3>
				<div class="odd_row">
					<p class="mbl-strng">User Type: Super Administrators (<b>Highest category</b>)</p>
					<p><span class="mbl-strng">Definition</span> Performs user and API management</p>
					<p><span class="mbl-strng">Technical Proficiency:</span> LOW</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">User Type: Application Managers</p>
					<p><span class="mbl-strng">Definition:</span> Manages how data is configured and propagated</p>
					<p><span class="mbl-strng">Technical Proficiency:</span> MID</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">User Type: Developers</p>
					<p><span class="mbl-strng">Definition</span> Maintains the interface and writes applications</p>
					<p><span class="mbl-strng">Technical Proficiency:</span> HIGH</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">User Type: Consumers</p>
					<p><span class="mbl-strng">Definition:</span> End users</p>
					<p><span class="mbl-strng">Technical Proficiency:</span> LOW</p>
				</div>
			</div>
			<h2 id="User_Type_Hierarchical_Details">User Type Hierarchical Details</h2>
			<p>This section describes how Quarry user types are defined and their contribution to the overall API data lifecycle.</p>			
			<h3 id="Super_Administrators">Super Administrators</h3>			
			<p>Administrators are the highest type of users in Quarry. They have access to all rights and features in the system. Their primary roles are to manage users, generate API keys for users, assign roles to all new users, and monitor the overall system health.</p>
			<h3 id="Application_Managers">Application Managers</h3>
			<p>Users who only need to create datasets will be given this role. The application manager manages the data source&rsquo;s external system and will have the configuration details to create a connection for remote access to the necessary data. The application manager will need a valid API key to test a connection, along with test and examine the dataset prior to giving developers public access.</p>
			<h3 id="Developers">Developers</h3>
			<p>Developers can be users who maintain Quarry API&rsquo;s codebase or are responsible for creating end user applications. Developers generally will use Quarry API to populate their applications.</p>
			<h3 id="Consumers">Consumers</h3>
			<p>End users will be able to consume Quarry API data via handheld, tablet and desktop.</p>
			<h2 id="User_Management">User Management</h2>
			<h3 id="User_Lifecycle_Flow">User Lifecycle Flow</h3>
			<p>All Quarry API users will need to register. Below is the Quarry API registration screen.</p>
			<img src="img/quarry_manual/register.png" alt="Quarry API registration form that asks for first name, last name, e-mail address, and password" />
			<h4>Get Approved by an Administrator</h4>
			<p>An administrator will see your registration in the Pending Request page and will begin the approval process.</p>
			<h5>Pending User Account Request List</h5>
			<img src="img/quarry_manual/pending_request.jpg" alt="List of pending user accounts requested" />
			<h5>Approve Pending User Account Request</h5>
			<p>The pending page allows administrators to select your role and modify other information in your profile. This user has been given <b>Super Admin</b> rights.</p>
			<img src="img/quarry_manual/approve_user.jpg" alt="Pending user account page were profile is updated with permissions or any other necessary information" />
			<h5>User Account Approval Message</h5>
			<img src="img/quarry_manual/user_approved.jpg" alt="User account approval message, which shows user name, status, date account was created, and e-mail address" />			
			<h5>Login Screen</h5>
			<p class="error_note"><b>Note</b>: Request Access feature has not been implemented as of v.1.0.0</p>			
			<img src="img/quarry_manual/login.jpg" alt="Quarry - Admin UI Login in Page, which asks for user name and password" />			
			<h5>User Password Reset</h5>
			<img src="img/quarry_manual/forgot_password.jpg" alt="User password reset, which is looking for persons e-mail address" />
			<h2 id="User_Policies">User Policies</h2>
			<h3 id="Permissions">Permissions</h3>
			<p>AdminUI is a permission-based interface which represents user driven features. All actions and operations are assigned to a permission in the source code. However, a permission must be created in the interface prior to the action being programmed in the source code. The Access Control List (ACL) governs permission&rsquo;s management in the AdminUI system. You can assign permissions to roles in the <b>Role Manager</b> page.</p>
			<h4>Access Control List (ACL)</h4>			
			<div class="dsktp_tbl">
				<table summary="Quarry Access Control List (ACL), which contains API permissions and description fields">
					<caption>Quarry Access Control List (ACL)</caption>
					<thead>
						<tr>
							<th scope="col">Quarry API Permissions</th>
							<th scope="col">Feature/Operation</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Access ACL</td>
							<td>Allows access to view, and change settings in the ACL</td>
						</tr>
						<tr>
							<td>Add Datasets</td>
							<td>User can add datasets</td>
						</tr>
						<tr>
							<td>Add Key</td>
							<td>Generate new API keys</td>
						</tr>
						<tr>
							<td>Add Permissions</td>
							<td>Add permissions to the system</td>
						</tr>
						<tr>
							<td>Add Role</td>
							<td>Create new roles</td>
						</tr>
						<tr>
							<td>Add User</td>
							<td>Allows user to add roles to the system</td>
						</tr>
						<tr>
							<td>Assign Role</td>
							<td>Can assign roles to users</td>
						</tr>
						<tr>
							<td>Block Key</td>
							<td>Block API keys from interacting with Quarry</td>
						</tr>
						<tr>
							<td>Delete Dataset</td>
							<td>Delete datasets</td>
						</tr>
						<tr>
							<td>Delete Key</td>
							<td>Delete API keys</td>
						</tr>
						<tr>
							<td>Delete Permission</td>
							<td>Delete permissions from the system</td>
						</tr>
						<tr>
							<td>Delete Role</td>
							<td>Delete roles from the system</td>
						</tr>
						<tr>
							<td>Delete User</td>
							<td>Delete a user from the system</td>
						</tr>
						<tr>
							<td>Edit Datasets</td>
							<td>Edit datasets</td>
						</tr>
						<tr>
							<td>Edit Key</td>
							<td>Edit API key parameters </td>
						</tr>
						<tr>
							<td>Edit Permission</td>
							<td>Edit permission</td>
						</tr>
						<tr>
							<td>Edit Role</td>
							<td>Edit role properties</td>
						</tr>
						<tr>
							<td>Edit User</td>
							<td>Edit user profiles</td>
						</tr>
						<tr>
							<td>Modify Key Registration</td>
							<td>Edit registered API key</td>
						</tr>
						<tr>
							<td>Search Key</td>
							<td>Search API keys by properties</td>
						</tr>
						<tr>
							<td>Unblock Key</td>
							<td>Unblock an API key</td>
						</tr>
						<tr>
							<td>Validate Host</td>
							<td>Allowed to validate a data source connection</td>
						</tr>
						<tr>
							<td>View Datasets</td>
							<td>View datasets</td>
						</tr>
						<tr>
							<td>View Key</td>
							<td>View API keys</td>
						</tr>
						<tr>
							<td>View Permissions</td>
							<td>View permissions list</td>
						</tr>
						<tr>
							<td>View Rest Logs</td>
							<td>View REST transactions log</td>
						</tr>
						<tr>
							<td>View Roles</td>
							<td>View user role list</td>
						</tr>
						<tr>
							<td>View Users</td>
							<td>View user account list</td>
						</tr>
					</tbody>
				</table>
			</div>			
			<div class="mbl_tbl">
				<h5>Quarry Access Control List (ACL)</h5>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: Access ACL</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Allows access to view, and change settings in the ACL</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: Add Datasets</p>
					<p><span class="mbl-strng">Feature/Operation:</span> User can add datasets</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: Add Key</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Generate new API keys</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: Add Permissions</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Add permissions to the system</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: Add Role</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Create new roles</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: Add User</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Allows user to add roles to the system</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: Assign Role</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Can assign roles to users</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: Block Key</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Block API keys from interacting with Quarry</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: Delete Dataset</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Delete datasets</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: Delete Key</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Delete API keys</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: Delete Permission</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Delete permissions from the system</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: Delete Role</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Delete roles from the system</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: Delete User</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Delete a user from the system</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: Edit Datasets</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Edit datasets</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: Edit Key</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Edit API key parameters</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: Edit Permission</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Edit permission</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: Edit Role</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Edit role properties</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: Edit User</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Edit user profiles</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: Modify Key Registration</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Edit registered API key</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: Search Key</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Search API keys by properties</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: Unblock Key</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Unblock an API key</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: Validate Host</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Allowed to validate a data source connection</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: View Datasets</p>
					<p><span class="mbl-strng">Feature/Operation:</span> View datasets</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: View Key</p>
					<p><span class="mbl-strng">Feature/Operation:</span> View API keys</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: View Permissions</p>
					<p><span class="mbl-strng">Feature/Operation:</span> View permissions list</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: View Rest Logs</p>
					<p><span class="mbl-strng">Feature/Operation:</span> View REST transactions log</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: View Roles</p>
					<p><span class="mbl-strng">Feature/Operation:</span> View user role list</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: View Users</p>
					<p><span class="mbl-strng">Feature/Operation:</span> View user account list</p>
				</div>
			</div>			
			<h4>Adding Permissions</h4>
			<p>Adding permissions is a straightforward process. Please make sure you <b>do not</b> create duplicate system IDs or system names.</p>
			<div class="dsktp_tbl">
				<table summary="Quarry Permissions, which about property and definition fields">
					<caption>Quarry Permissions</caption>
					<thead>
						<tr>
							<th scope="col">Property</th>
							<th scope="col">Definition</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>System Name</td>
							<td>Human readable name for a permission</td>
						</tr>
						<tr>
							<td>System ID</td>
							<td>Slug name that is used in the source code</td>
						</tr>
						<tr>
							<td>Description</td>
							<td>Description of the permission</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="mbl_tbl">
				<h5>Quarry Permissions</h5>
				<div class="odd_row">
					<p><span class="mbl-strng">Property:</span> System Name</p>
					<p><span class="mbl-strng">Definition:</span> Human readable name for a permission</p>
				</div>
				<div class="even_row">
					<p><span class="mbl-strng">Property:</span> System ID</p>
					<p><span class="mbl-strng">Definition:</span> Slug name that is used in the source code</p>
				</div>
				<div class="odd_row">
					<p><span class="mbl-strng">Property:</span> Description</p>
					<p><span class="mbl-strng">Definition:</span> Description of the permission</p>
				</div>
			</div>
			<img src="img/quarry_manual/list-of-permissions.jpg" alt="Create additional permissions page, which you need to add system name, system ID, and description information" />
			<h3 id="Roles">Roles</h3>
			<p>All users must be assigned a role, which is a set of permissions that grants users access to AdminUI features.</p>
			<div class="dsktp_tbl">
				<table summary="Quarry Roles, which are the suer type and their permissions">
					<caption>Quarry Roles</caption>
					<thead>
						<tr>
							<th scope="col">User Type</th>
							<th scope="col">Rights</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Super Administrators</td>
							<td>All permissions</td>
						</tr>
						<tr>
							<td>Application Managers</td>
							<td>Permissions only related to dataset management</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="mbl_tbl">
				<h4>Quarry Roles</h4>
				<div class="odd_row">
					<p><span class="mbl-strng">User Type:</span> Super Administrators</p>
					<p><span class="mbl-strng">Rights:</span> All permissions</p>
				</div>
				<div class="even_row">
					<p><span class="mbl-strng">User Type:</span> Application Managers</p>
					<p><span class="mbl-strng">Rights:</span> Permissions only related to dataset management</p>
				</div>
			</div>			
			<img src="img/quarry_manual/list-of-user-roles.jpg" alt="List of user roles, which a person can view, update, or delete" />
			<p>You can create roles in the Account Manager menu. A role must be assigned at least one permission during its creation.  The table below describes the required role parameters.</p>
			<div class="dsktp_tbl">
				<table summary="List of User Roles, which a person can view, update, or delete">
					<caption>List of User Roles</caption>
					<thead>
						<tr>
							<th scope="col">Property</th>
							<th scope="col">Definition</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>System Name</td>
							<td>Human readable name</td>
						</tr>
						<tr>
							<td>System ID</td>
							<td>Slug name that is used in the source code</td>
						</tr>
						<tr>
							<td>Description</td>
							<td>Description of the role</td>
						</tr>
						<tr>
							<td>Permissions</td>
							<td>You can assign permissions in the UI</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="mbl_tbl">
				<h4>List of User Roles</h4>
				<div class="odd_row">
					<p><span class="mbl-strng">Property:</span> System Name</p>
					<p><span class="mbl-strng">Definition:</span> Human readable name</p>
				</div>
				<div class="even_row">
					<p><span class="mbl-strng">Property:</span> System ID</p>
					<p><span class="mbl-strng">Definition:</span> Slug name that is used in the source code</p>
				</div>
				<div class="odd_row">
					<p><span class="mbl-strng">Property:</span> Description</p>
					<p><span class="mbl-strng">Definition:</span> Description of the role</p>
				</div>
				<div class="even_row">
					<p><span class="mbl-strng">Property:</span> Permissions</p>
					<p><span class="mbl-strng">Definition:</span> You can assign permissions in the UI</p>
				</div>
			</div>
			<h4>Creating Roles</h4>
			<p>Permissions will vary based on the user role, which you cannot have duplicate system IDs or system names.</p>
			<img src="img/quarry_manual/add-user-roles.jpg" alt="Add role page, which lets you create name, system ID, 500 character description, and chose permissions" />
			<h2 id="Quarry_API_Key_Management">Quarry API Key Management</h2>
			<h3 id="Creating_Quarry_API_Keys">Creating Quarry API Keys</h3>
			<p>Administrators can create new API keys by using the <b>Register New Key</b> tab found under the <b>API Key Manager</b> menu. Quarry API will accept APIv1 keys as well. A user can own multiple Quarry API keys. New API keys are emailed to the user.</p>
			<div class="dsktp_tbl">
				<table summary="Quarry API Key Information, which uses API key name, e-mail address, and description">
					<caption>OSHA Violation General Duty Standards</caption>
					<thead>
						<tr>
							<th scope="col">API Key Property</th>
							<th scope="col">Definition</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>API key name</td>
							<td>API label given by the user or organization</td>
						</tr>
						<tr>
							<td>Assigned E-mail Address</td>
							<td>User&rsquo;s email address</td>
						</tr>
						<tr>
							<td>Description</td>
							<td>API key description</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="mbl_tbl">
				<h4>Quarry API Key Information</h4>
				<div class="odd_row">
					<p><span class="mbl-strng">API Key Property:</span> API key name</p>
					<p><span class="mbl-strng">Definition:</span> API label given by the user or organization</p>
				</div>
				<div class="even_row">
					<p><span class="mbl-strng">API Key Property:</span> Assigned E-mail Address</p>
					<p><span class="mbl-strng">Definition:</span> User&rsquo;s email address</p>
				</div>
				<div class="odd_row">
					<p><span class="mbl-strng">API Key Property:</span> Description</p>
					<p><span class="mbl-strng">Definition:</span> API key description</p>
				</div>
			</div>			
			<img src="img/quarry_manual/register-key.jpg" alt="Register new API key page, which allows you to name the API key, assign an e-mail address to the key, and write a short description" />
			<h3 id="Quarry_API_Keys">Quarry API Keys</h3>
			<p>The <b>API Key Manager</b> contains a list of API keys. In addition to deleting keys, administrators can block/unblock user keys should the need arises, along with additional features available on this page.</p>
			<img src="img/quarry_manual/list-of-api-keys.jpg" alt="List of API keys page, which allows administrators to view, updated, delete, or block and unblock an individual API key" />
			<h2 id="Dataset_Service_Managemen">Dataset Service Management</h2>
			<p>The <b>Manage Datasets</b> menu allows administrators to configure datasets for the Quarry API REST engine. The definitions in table 6.1 are the main components for the dataset management service.  The connection string parameters are supplied by the data source owner.</p>
			<p>Be mindful that Quarry API v1.0.0 currently supports four database types. </p>
			<h3 id="Supported_Database_Types">Supported Database Types:</h3>
			<ul>
				<li>MySQL</li>
				<li>Microsoft SQL</li>
				<li>Oracle</li>
				<li>PostgreSQL</li>
			</ul>
			<div class="dsktp_tbl">
				<table summary="Quarry Database Query Information, which uses connection string, dat source, dataset, obfuscation, and service to extract information">
					<caption>Quarry Database Query Information</caption>
					<thead>
						<tr>
							<th scope="col">Quarry Data service</th>
							<th scope="col">Definition</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Connection string</td>
							<td>Connection strings are input parameters that allow Quarry to connect to a remote data source</td>
						</tr>
						<tr>
							<td>Data source</td>
							<td>Remote data resource that will be RESTfully accessed by Quarry API</td>
						</tr>
						<tr>
							<td>Dataset</td>
							<td>RESTful data structure based on a user&rsquo;s input</td>
						</tr>
						<tr>
							<td>Obfuscation</td>
							<td>Technique of obscuring the data source&rsquo;s table names for security purposes</td>
						</tr>
						<tr>
							<td>Service</td>
							<td>Quarry provides round trip user input translation services from HTTP to SQL as outlined in list 6.1 Using advance technology lessens the technical learning curve while enhancing the user experience</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="mbl_tbl">
				<h4>Quarry Database Query Information</h4>
				<div class="odd_row">
					<p><span class="mbl-strng">Quarry Data service:</span> Connection string</p>
					<p><span class="mbl-strng">Definition:</span> Connection strings are input parameters that allow Quarry to connect to a remote data source</p>
				</div>
				<div class="even_row">
					<p><span class="mbl-strng">Quarry Data service:</span> Data source</p>
					<p><span class="mbl-strng">Definition:</span> Remote data resource that will be RESTfully accessed by Quarry API</p>
				</div>
				<div class="odd_row">
					<p><span class="mbl-strng">Quarry Data service:</span> Dataset</p>
					<p><span class="mbl-strng">Definition:</span> RESTful data structure based on a user&rsquo;s input</p>
				</div>
				<div class="even_row">
					<p><span class="mbl-strng">Quarry Data service:</span> Obfuscation</p>
					<p><span class="mbl-strng">Definition:</span>  	Technique of obscuring the data source&rsquo;s table names for security purposes</p>
				</div>
				<div class="odd_row">
					<p><span class="mbl-strng">Quarry Data service:</span> Service</p>
					<p><span class="mbl-strng">Definition:</span> Quarry provides round trip user input translation services from HTTP to SQL <br> as outlined in list 6.1 Using advance technology lessens the technical learning curve while enhancing the user experience</p>
				</div>
			</div>			
			<h3 id="Typical_Configuration_Sequence_of_Quarry_API_Data_Service">Typical Configuration Sequence of Quarry API Data Service</h3>
			<ol>
				<li>The application manager will contact the data source owner for the connection string information.</li>
				<li>The application manager will request that the data source owner provides an obfuscated  list of available table names.</li>
				<li>The application manager will add a dataset by selecting the appropriate database type and entering the connection string parameters including the obfuscated table name information.</li>
				<li>Test the new connection string   for datasets using Quarry&rsquo;s AdminUI. You can see the datasets information in either JSON or XML format, dependent on your choice.</li>
				<li>If you   are able to successfully connect to a data source, but cannot retrieve data, contact the data source owner and check if the remote configuration is working or whether the database has data.</li>
			</ol>
			<h3 id="Add_Data_Service">Add Data Service</h3>
			<p>Obtain connection string parameters from the data source owner.  Use table 6.2 as a reference. If the owner does not have the database type listed, Quarry API cannot offer service. Please note which fields in this table are required, optional or not applicable depending on the database type (MySQL, Microsoft SQL, Oracle and PostgreSQL).</p>
			<div class="dsktp_tbl">
				<table summary="Quarry Database Fields, which include FQDN/IP Address, user name, password, database name, schema, table name, and a few more">
					<caption>Quarry Database Fields</caption>
					<thead>
						<tr>
							<th scope="col">Database Parameters</th>
							<th scope="col">MySQL</th>
							<th scope="col">Microsoft SQL</th>
							<th scope="col">Oracle</th>
							<th scope="col">PostgreSQL</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">FQDN/IP Address</th>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
						</tr>
						<tr>
							<th scope="row">API Username</th>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
						</tr>
						<tr>
							<th scope="row">API Password</th>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
						</tr>
						<tr>
							<th scope="row">DB Name</th>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
						</tr>
						<tr>
							<th scope="row">Instance</th>
							<td>N/A</td>
							<td>Optional</td>
							<td>N/A</td>
							<td>N/A</td>
						</tr>
						<tr>
							<th scope="row">Schema</th>
							<td>N/A</td>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
						</tr>
						<tr>
							<th scope="row">Table Name</th>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
						</tr>
						<tr>
							<th scope="row">Alias</th>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
						</tr>
						<tr>
							<th scope="row">Column Name</th>
							<td>Optional</td>
							<td>Optional</td>
							<td>Optional</td>
							<td>Optional</td>
						</tr>
						<tr>
							<th scope="row">SID or Service Name</th>
							<td>N/A</td>
							<td>N/A</td>
							<td>Optional</td>
							<td>N/A</td>
						</tr>
						<tr>
							<th scope="row">Port</th>
							<td>Optional</td>
							<td>Optional</td>
							<td>Optional</td>
							<td>Optional</td>
						</tr>
						<tr>
							<th scope="row">Description</th>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="mbl_tbl">
				<h4>Quarry Database Fields</h4>
				<div class="odd_row">
					<p class="mbl-strng">Database Parameters: FQDN/IP Address</p>
					<p><span class="mbl-strng">MySQL:</span> Required</p>
					<p><span class="mbl-strng">Microsoft SQL:</span> Required</p>
					<p><span class="mbl-strng">Oracle:</span> Required</p>
					<p><span class="mbl-strng">PostgreSQL:</span> Required</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Database Parameters: API Username</p>
					<p><span class="mbl-strng">MySQL:</span> Required</p>
					<p><span class="mbl-strng">Microsoft SQL:</span> Required</p>
					<p><span class="mbl-strng">Oracle:</span> Required</p>
					<p><span class="mbl-strng">PostgreSQL:</span> Required</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Database Parameters: API Password</p>
					<p><span class="mbl-strng">MySQL:</span> Required</p>
					<p><span class="mbl-strng">Microsoft SQL:</span> Required</p>
					<p><span class="mbl-strng">Oracle:</span> Required</p>
					<p><span class="mbl-strng">PostgreSQL:</span> Required</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Database Parameters: DB Name</p>
					<p><span class="mbl-strng">MySQL:</span> Required</p>
					<p><span class="mbl-strng">Microsoft SQL:</span> Required</p>
					<p><span class="mbl-strng">Oracle:</span> Required</p>
					<p><span class="mbl-strng">PostgreSQL:</span> Required</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Database Parameters: Instance</p>
					<p><span class="mbl-strng">MySQL:</span> N/A</p>
					<p><span class="mbl-strng">Microsoft SQL:</span> Optional</p>
					<p><span class="mbl-strng">Oracle:</span> N/A</p>
					<p><span class="mbl-strng">PostgreSQL:</span> N/A</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Database Parameters: Schema</p>
					<p><span class="mbl-strng">MySQL:</span> N/A</p>
					<p><span class="mbl-strng">Microsoft SQL:</span> Required</p>
					<p><span class="mbl-strng">Oracle:</span> Required</p>
					<p><span class="mbl-strng">PostgreSQL:</span> Required</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Database Parameters: Table Name</p>
					<p><span class="mbl-strng">MySQL:</span> Required</p>
					<p><span class="mbl-strng">Microsoft SQL:</span> Required</p>
					<p><span class="mbl-strng">Oracle:</span> Required</p>
					<p><span class="mbl-strng">PostgreSQL:</span> Required</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Database Parameters: Alias</p>
					<p><span class="mbl-strng">MySQL:</span> Required</p>
					<p><span class="mbl-strng">Microsoft SQL:</span> Required</p>
					<p><span class="mbl-strng">Oracle:</span> Required</p>
					<p><span class="mbl-strng">PostgreSQL:</span> Required</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Database Parameters: Column Name</p>
					<p><span class="mbl-strng">MySQL:</span> Optional</p>
					<p><span class="mbl-strng">Microsoft SQL:</span> Optional</p>
					<p><span class="mbl-strng">Oracle:</span> Optional</p>
					<p><span class="mbl-strng">PostgreSQL:</span> Optional</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Database Parameters: SID or Service Name</p>
					<p><span class="mbl-strng">MySQL:</span> N/A</p>
					<p><span class="mbl-strng">Microsoft SQL:</span> N/A</p>
					<p><span class="mbl-strng">Oracle:</span> Optional</p>
					<p><span class="mbl-strng">PostgreSQL:</span> N/A</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Database Parameters: Port</p>
					<p><span class="mbl-strng">MySQL:</span> Optional</p>
					<p><span class="mbl-strng">Microsoft SQL:</span> Optional</p>
					<p><span class="mbl-strng">Oracle:</span> Optional</p>
					<p><span class="mbl-strng">PostgreSQL:</span> Optional</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Database Parameters: Description</p>
					<p><span class="mbl-strng">MySQL:</span> Required</p>
					<p><span class="mbl-strng">Microsoft SQL:</span> Required</p>
					<p><span class="mbl-strng">Oracle:</span> Required</p>
					<p><span class="mbl-strng">PostgreSQL:</span> Required</p>
				</div>
			</div>
			<p>Figure 6.1 shows how to connect to an Oracle data source to Quarry. Please use table 6.1 as a guide to which fields are necessary.</p>			
			<img src="img/quarry_manual/add-data-string.jpg" alt="Database connection string page, which asks for database type, IP address, use name, password, and a few more fields" />			
		</div>
  </section>    </div>
  </li>
</ul>
  
  <!-- Tab Panel -->
<div>
<div class="small-9 large-centered columns show-for-medium-up">
<ul id = "tab-menu" class="tabs" data-tab role="tablist">
  <li class="tab-title active" role="presentational"><a href="#panel2-1" role="tab" tabindex="-1" aria-selected="true" controls="panel2-1">Overview</a></li>
  <li class="tab-title tab-title-feature" role="presentational"><a href="#panel2-2" role="tab" tabindex="-1" aria-selected="false" controls="panel2-2">Features</a></li>
  <li class="tab-title tab-title-requirement" role="presentational" id="#panel2-3" name="#panel2-3"><a href="#panel2-3" role="tab" tabindex="-1" aria-selected="false" controls="panel2-3">Requirements</a></li>
  <li class="tab-title tab-title-documentation" role="presentational"><a href="#panel2-4" role="tab" tabindex="-1" aria-selected="false" controls="panel2-4">Documentation</a></li>
</ul>
</div>
<div class="tabs-content show-for-medium-up">
<!-- Overview -->
  <section role="tabpanel" aria-hidden="false" class="content active panel callout radius" id="panel2-1">
<ul class="large-block-grid-3">
  <li class= "text-center">
      <img alt="Quarry API is free" src="img/Money.png" style="width: 200px; height: 200px; align:center;" />
      <h3 class = "text-center"><strong>FREE</strong></h3>
      <p class= "text-center">Without any strings attached. It's <br> yours to try and use today!</p>
  </li>
  <li class= "text-center">
      <img alt="Quarry API is secure" src="img/Lock.png" style="width: 200px; height: 200px; align:center;" />
      <h3 class= "text-center"><strong>SECURE</strong></h3>
      <p class= "text-center">
      	Built with NIST standards in<br>
        mind. It's great for any federal,<br>
        state or local organization that <br>
        needs to share publicly available <br>
        data through an API.
		</p>
  </li>
  <li class= "text-center">
      <img alt="Quary API is free" src="img/People.png" style="width: 200px; height: 200px; align:center;" />
      <h3 class= "text-center"><strong>SUPPORTED</strong></h3>
      <p class= "text-center">We regularly provide updates <br> and are here to help you.</p>
  </li>
</ul>  
</section>
<!-- Features -->  
  <section role="tabpanel" data-options="deep_linking:true; scroll_to_content: true" aria-hidden="true" class="content panel feature radius " id="panel2-2">
    <h2>Database Support</h2>
	<div class="row">
	  <p class="small-2 large-4 columns">PostSQL - Version x or later</p>
	  <p class="small-4 large-4 columns">DB2 - Version 5.2 or later</p>
	  <p class="small-6 large-4 columns">Oracle - Version 9i or later</p>
	</div>
	<div class="row">
	  <p class="small-2 large-4 columns">MySQL - Version 4 or later</p>
	  <p class="small-4 large-4 columns">MSSQL - Version 2010 or later</p>
	  <div class="small-6 large-4 columns"></div>
	</div>
    <h2><strong>Protect Your Data</strong></h2>
	<div class="row">
	  <div class="large-6 columns"><p> Delegation - Give access to local database administrators to control what data is shared </p></div>
	  <div class="large-6 columns"><p> Obfuscation - Make your table names human-friendly by hiding the technical details </p></div>
	</div>    
    <h2><strong>Ease of Use</strong></h2>
	<div class="row">
	  <p class="large-6 columns">For Administrators</p>
	<div class="row">
	  <p class="large-6 columns">For Developers</p>
	</div> 
	<div class="large-6 columns">
	<p>Administrative interface with forms-based interface for managing:</p>
		<ul>
			<li>Datasets</li>
			<li>API users</li>
			<li>Developer keys</li>
		</ul>
	</div>
	<p class="large-6 columns">
	  One stop shop for your organization's datasets<br>
	  One API key works across all of your datasets <br>
	  Software development kits for 8 languages & platforms
	</p>

      </div>	     
  </section>
<!-- Requirements -->  

  <section role="tabpanel" aria-hidden="true" class="content panel requirement radius" data-options="deep_linking:true; scroll_to_content: true" id="panel2-3" name="panel2-3">
	<div class="row">
	  <div class="large-6 columns"><h3 id = "requirements">Basic Configuration</h3></div>
	</div> 
	<div class="row">
	  <div class="large-6 columns">
	  <p><strong>To run Quarry you’ll need:</strong></p>
       <p>A Debian based Linux distribution that has at least 5 GB of memory, two 2 gigabyte processors, and 20 gigabytes of free space.</p>
        <p>Access to a MySQL or Microsoft SQL server.</p>
        <p>Ability to download the <a href="
http://www.rackspace.com/knowledge_center/article/install-epel-and-additional-repositories-on-centos-and-red-hat
">REMI</a> and <a href=" 
http://www.rackspace.com/knowledge_center/article/install-epel-and-additional-repositories-on-centos-and-red-hat
">EPEL</a>  repositories.</p>
  	
	   <a href="https://github.com/USDepartmentofLabor/Quarry" class="button"><strong>Download Quarry</strong></a>	    
	  </div>
	  </div>
	</div> 	
 </section>
<!-- Documentation -->  
  
  <section role="tabpanel" aria-hidden="true" data-options="deep_linking:true; scroll_to_content: true" class="content panel documentation radius" id="panel2-4">
		<div id="wrap_manual">
			<!-- HIDE FOR NOW
			<ul>
				<li><a href="#Quarry_API_User_Manual">Quarry API User Manual</a></li>
				<li><a href="#Overview">Overview</a></li>
				<li><a href="#Product_Information">Product Information</a></li>
				<li><a href="#Product_Features">Product Features</a></li>
				<li><a href="#User_Types">User Types</a></li>
				<li><a href="#User_Type_Hierarchical_Details">User Type Hierarchical Details</a></li>
				<li><a href="#Super_Administrators">Super Administrators</a></li>
				<li><a href="#Application_Managers">Application Managers</a></li>
				<li><a href="#Developers">Developers</a></li>
				<li><a href="#Consumers">Consumers</a></li>
				<li><a href="#User_Management">User Management</a></li>
				<li><a href="#User_Lifecycle_Flow">User Lifecycle Flow</a></li>
				<li><a href="#User_Policies">User Policies</a></li>
				<li><a href="#Permissions">Permissions</a></li>
				<li><a href="#Roles">Roles</a></li>
				<li><a href="#Quarry_API_Key_Management">Quarry API Key Management</a></li>
				<li><a href="#Creating_Quarry_API_Keys">Creating Quarry API Keys</a></li>
				<li><a href="#Quarry_API_Keys">Quarry API Keys</a></li>
				<li><a href="#Dataset_Service_Managemen">Dataset Service Management</a></li>
				<li><a href="#Supported_Database_Types">Supported Database Types</a></li>
				<li><a href="#Typical_Configuration_Sequence_of_Quarry_API_Data_Service">Typical Configuration Sequence of Quarry API Data Service</a></li>
				<li><a href="#Add_Data_Service">Add Data Service</a></li>
			</ul>
			-->
			<h1 id="Quarry_API_User_Manual">Quarry API User Manual</h1>
			<br>
			<h2 id="Overview">Overview</h2>
			<p>This document is an operational overview of the administrative interface for Quarry API.  Details will be provided on how to manage and publish datasets.</p>
			<h3 id = "Product_Information">Product Information</h3>
			<p>Quarry API is a convenient way to access DOL data and is designed using RESTful technology along with the user-friendly web 2.0 accessible layout. Therefore, the burden of data configuration, user management and RESTful API calls can be done with a less technically skilled staff.</p>			
			<h3 id="Product_Features">Product Features</h3>
			<p>With Quarry API you can:</p>
			<ul>
				<li>Use any open web language to access data</li>
				<li>Obtain public datasets in JSON or XML formats</li>
				<li>Filter RESTful queries by key/pair parameters</li>
				<li>Run API CRUD (Create, Read, Update, and Delete) operations</li>
				<li>Conduct transactions via mobile device</li>
				<li>Add, edit, and delete users</li>
				<li>Add, edit, and delete user roles and permissions</li>
				<li>Add, edit, and delete Quarry API keys</li>
				<li>Add, edit, delete, and test data sources for DOL dataset retrieval</li>
			</ul>
			<h2 id="User_Types">User Types</h2>
			<div class="dsktp_tbl">
				<table summary="Quarry API User Roles, which contains user type, definition, and technical proficiency fields">
					<caption>Quarry API User Roles</caption>
					<thead>
						<tr>
							<th scope="col">User Type</th>
							<th scope="col">Definition</th>
							<th scope="col">Technical Proficiency</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">Super Administrators (<b>Highest category</b>)</th>
							<td>Performs user and API management</td>
							<td>LOW</td>
						</tr>
						<tr>
							<th scope="row">Application Managers</th>
							<td>Manages how data is configured and propagated</td>
							<td>MID</td>
						</tr>
						<tr>
							<th scope="row">Developers</th>
							<td>Maintains the interface and writes applications</td>
							<td>HIGH</td>
						</tr>
						<tr>
							<th scope="row">Consumers</th>
							<td>End users</td>
							<td>LOW</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="mbl_tbl">
				<h3 id="Quarry_API_User_Roles">Quarry API User Roles</h3>
				<div class="odd_row">
					<p class="mbl-strng">User Type: Super Administrators (<b>Highest category</b>)</p>
					<p><span class="mbl-strng">Definition</span> Performs user and API management</p>
					<p><span class="mbl-strng">Technical Proficiency:</span> LOW</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">User Type: Application Managers</p>
					<p><span class="mbl-strng">Definition:</span> Manages how data is configured and propagated</p>
					<p><span class="mbl-strng">Technical Proficiency:</span> MID</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">User Type: Developers</p>
					<p><span class="mbl-strng">Definition</span> Maintains the interface and writes applications</p>
					<p><span class="mbl-strng">Technical Proficiency:</span> HIGH</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">User Type: Consumers</p>
					<p><span class="mbl-strng">Definition:</span> End users</p>
					<p><span class="mbl-strng">Technical Proficiency:</span> LOW</p>
				</div>
			</div>
			<h2 id="User_Type_Hierarchical_Details">User Type Hierarchical Details</h2>
			<p>This section describes how Quarry user types are defined and their contribution to the overall API data lifecycle.</p>			
			<h3 id="Super_Administrators">Super Administrators</h3>			
			<p>Administrators are the highest type of users in Quarry. They have access to all rights and features in the system. Their primary roles are to manage users, generate API keys for users, assign roles to all new users, and monitor the overall system health.</p>
			<h3 id="Application_Managers">Application Managers</h3>
			<p>Users who only need to create datasets will be given this role. The application manager manages the data source&rsquo;s external system and will have the configuration details to create a connection for remote access to the necessary data. The application manager will need a valid API key to test a connection, along with test and examine the dataset prior to giving developers public access.</p>
			<h3 id="Developers">Developers</h3>
			<p>Developers can be users who maintain Quarry API&rsquo;s codebase or are responsible for creating end user applications. Developers generally will use Quarry API to populate their applications.</p>
			<h3 id="Consumers">Consumers</h3>
			<p>End users will be able to consume Quarry API data via handheld, tablet and desktop.</p>
			<h2 id="User_Management">User Management</h2>
			<h3 id="User_Lifecycle_Flow">User Lifecycle Flow</h3>
			<p>All Quarry API users will need to register. Below is the Quarry API registration screen.</p>
			<img src="img/quarry_manual/register.png" alt="Quarry API registration form that asks for first name, last name, e-mail address, and password" />
			<h4>Get Approved by an Administrator</h4>
			<p>An administrator will see your registration in the Pending Request page and will begin the approval process.</p>
			<h5>Pending User Account Request List</h5>
			<img src="img/quarry_manual/pending_request.jpg" alt="List of pending user accounts requested" />
			<h5>Approve Pending User Account Request</h5>
			<p>The pending page allows administrators to select your role and modify other information in your profile. This user has been given <b>Super Admin</b> rights.</p>
			<img src="img/quarry_manual/approve_user.jpg" alt="Pending user account page were profile is updated with permissions or any other necessary information" />
			<h5>User Account Approval Message</h5>
			<img src="img/quarry_manual/user_approved.jpg" alt="User account approval message, which shows user name, status, date account was created, and e-mail address" />			
			<h5>Login Screen</h5>
			<p class="error_note"><b>Note</b>: Request Access feature has not been implemented as of v.1.0.0</p>			
			<img src="img/quarry_manual/login.jpg" alt="Quarry - Admin UI Login in Page, which asks for user name and password" />			
			<h5>User Password Reset</h5>
			<img src="img/quarry_manual/forgot_password.jpg" alt="User password reset, which is looking for persons e-mail address" />
			<h2 id="User_Policies">User Policies</h2>
			<h3 id="Permissions">Permissions</h3>
			<p>AdminUI is a permission-based interface which represents user driven features. All actions and operations are assigned to a permission in the source code. However, a permission must be created in the interface prior to the action being programmed in the source code. The Access Control List (ACL) governs permission&rsquo;s management in the AdminUI system. You can assign permissions to roles in the <b>Role Manager</b> page.</p>
			<h4>Access Control List (ACL)</h4>			
			<div class="dsktp_tbl">
				<table summary="Quarry Access Control List (ACL), which contains API permissions and description fields">
					<caption>Quarry Access Control List (ACL)</caption>
					<thead>
						<tr>
							<th scope="col">Quarry API Permissions</th>
							<th scope="col">Feature/Operation</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Access ACL</td>
							<td>Allows access to view, and change settings in the ACL</td>
						</tr>
						<tr>
							<td>Add Datasets</td>
							<td>User can add datasets</td>
						</tr>
						<tr>
							<td>Add Key</td>
							<td>Generate new API keys</td>
						</tr>
						<tr>
							<td>Add Permissions</td>
							<td>Add permissions to the system</td>
						</tr>
						<tr>
							<td>Add Role</td>
							<td>Create new roles</td>
						</tr>
						<tr>
							<td>Add User</td>
							<td>Allows user to add roles to the system</td>
						</tr>
						<tr>
							<td>Assign Role</td>
							<td>Can assign roles to users</td>
						</tr>
						<tr>
							<td>Block Key</td>
							<td>Block API keys from interacting with Quarry</td>
						</tr>
						<tr>
							<td>Delete Dataset</td>
							<td>Delete datasets</td>
						</tr>
						<tr>
							<td>Delete Key</td>
							<td>Delete API keys</td>
						</tr>
						<tr>
							<td>Delete Permission</td>
							<td>Delete permissions from the system</td>
						</tr>
						<tr>
							<td>Delete Role</td>
							<td>Delete roles from the system</td>
						</tr>
						<tr>
							<td>Delete User</td>
							<td>Delete a user from the system</td>
						</tr>
						<tr>
							<td>Edit Datasets</td>
							<td>Edit datasets</td>
						</tr>
						<tr>
							<td>Edit Key</td>
							<td>Edit API key parameters </td>
						</tr>
						<tr>
							<td>Edit Permission</td>
							<td>Edit permission</td>
						</tr>
						<tr>
							<td>Edit Role</td>
							<td>Edit role properties</td>
						</tr>
						<tr>
							<td>Edit User</td>
							<td>Edit user profiles</td>
						</tr>
						<tr>
							<td>Modify Key Registration</td>
							<td>Edit registered API key</td>
						</tr>
						<tr>
							<td>Search Key</td>
							<td>Search API keys by properties</td>
						</tr>
						<tr>
							<td>Unblock Key</td>
							<td>Unblock an API key</td>
						</tr>
						<tr>
							<td>Validate Host</td>
							<td>Allowed to validate a data source connection</td>
						</tr>
						<tr>
							<td>View Datasets</td>
							<td>View datasets</td>
						</tr>
						<tr>
							<td>View Key</td>
							<td>View API keys</td>
						</tr>
						<tr>
							<td>View Permissions</td>
							<td>View permissions list</td>
						</tr>
						<tr>
							<td>View Rest Logs</td>
							<td>View REST transactions log</td>
						</tr>
						<tr>
							<td>View Roles</td>
							<td>View user role list</td>
						</tr>
						<tr>
							<td>View Users</td>
							<td>View user account list</td>
						</tr>
					</tbody>
				</table>
			</div>			
			<div class="mbl_tbl">
				<h5>Quarry Access Control List (ACL)</h5>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: Access ACL</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Allows access to view, and change settings in the ACL</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: Add Datasets</p>
					<p><span class="mbl-strng">Feature/Operation:</span> User can add datasets</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: Add Key</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Generate new API keys</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: Add Permissions</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Add permissions to the system</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: Add Role</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Create new roles</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: Add User</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Allows user to add roles to the system</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: Assign Role</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Can assign roles to users</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: Block Key</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Block API keys from interacting with Quarry</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: Delete Dataset</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Delete datasets</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: Delete Key</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Delete API keys</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: Delete Permission</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Delete permissions from the system</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: Delete Role</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Delete roles from the system</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: Delete User</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Delete a user from the system</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: Edit Datasets</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Edit datasets</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: Edit Key</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Edit API key parameters</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: Edit Permission</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Edit permission</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: Edit Role</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Edit role properties</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: Edit User</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Edit user profiles</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: Modify Key Registration</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Edit registered API key</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: Search Key</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Search API keys by properties</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: Unblock Key</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Unblock an API key</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: Validate Host</p>
					<p><span class="mbl-strng">Feature/Operation:</span> Allowed to validate a data source connection</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: View Datasets</p>
					<p><span class="mbl-strng">Feature/Operation:</span> View datasets</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: View Key</p>
					<p><span class="mbl-strng">Feature/Operation:</span> View API keys</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: View Permissions</p>
					<p><span class="mbl-strng">Feature/Operation:</span> View permissions list</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: View Rest Logs</p>
					<p><span class="mbl-strng">Feature/Operation:</span> View REST transactions log</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Quarry API Permissions: View Roles</p>
					<p><span class="mbl-strng">Feature/Operation:</span> View user role list</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Quarry API Permissions: View Users</p>
					<p><span class="mbl-strng">Feature/Operation:</span> View user account list</p>
				</div>
			</div>			
			<h4>Adding Permissions</h4>
			<p>Adding permissions is a straightforward process. Please make sure you <b>do not</b> create duplicate system IDs or system names.</p>
			<div class="dsktp_tbl">
				<table summary="Quarry Permissions, which about property and definition fields">
					<caption>Quarry Permissions</caption>
					<thead>
						<tr>
							<th scope="col">Property</th>
							<th scope="col">Definition</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>System Name</td>
							<td>Human readable name for a permission</td>
						</tr>
						<tr>
							<td>System ID</td>
							<td>Slug name that is used in the source code</td>
						</tr>
						<tr>
							<td>Description</td>
							<td>Description of the permission</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="mbl_tbl">
				<h5>Quarry Permissions</h5>
				<div class="odd_row">
					<p><span class="mbl-strng">Property:</span> System Name</p>
					<p><span class="mbl-strng">Definition:</span> Human readable name for a permission</p>
				</div>
				<div class="even_row">
					<p><span class="mbl-strng">Property:</span> System ID</p>
					<p><span class="mbl-strng">Definition:</span> Slug name that is used in the source code</p>
				</div>
				<div class="odd_row">
					<p><span class="mbl-strng">Property:</span> Description</p>
					<p><span class="mbl-strng">Definition:</span> Description of the permission</p>
				</div>
			</div>
			<img src="img/quarry_manual/list-of-permissions.jpg" alt="Create additional permissions page, which you need to add system name, system ID, and description information" />
			<h3 id="Roles">Roles</h3>
			<p>All users must be assigned a role, which is a set of permissions that grants users access to AdminUI features.</p>
			<div class="dsktp_tbl">
				<table summary="Quarry Roles, which are the suer type and their permissions">
					<caption>Quarry Roles</caption>
					<thead>
						<tr>
							<th scope="col">User Type</th>
							<th scope="col">Rights</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Super Administrators</td>
							<td>All permissions</td>
						</tr>
						<tr>
							<td>Application Managers</td>
							<td>Permissions only related to dataset management</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="mbl_tbl">
				<h4>Quarry Roles</h4>
				<div class="odd_row">
					<p><span class="mbl-strng">User Type:</span> Super Administrators</p>
					<p><span class="mbl-strng">Rights:</span> All permissions</p>
				</div>
				<div class="even_row">
					<p><span class="mbl-strng">User Type:</span> Application Managers</p>
					<p><span class="mbl-strng">Rights:</span> Permissions only related to dataset management</p>
				</div>
			</div>			
			<img src="img/quarry_manual/list-of-user-roles.jpg" alt="List of user roles, which a person can view, update, or delete" />
			<p>You can create roles in the Account Manager menu. A role must be assigned at least one permission during its creation.  The table below describes the required role parameters.</p>
			<div class="dsktp_tbl">
				<table summary="List of User Roles, which a person can view, update, or delete">
					<caption>List of User Roles</caption>
					<thead>
						<tr>
							<th scope="col">Property</th>
							<th scope="col">Definition</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>System Name</td>
							<td>Human readable name</td>
						</tr>
						<tr>
							<td>System ID</td>
							<td>Slug name that is used in the source code</td>
						</tr>
						<tr>
							<td>Description</td>
							<td>Description of the role</td>
						</tr>
						<tr>
							<td>Permissions</td>
							<td>You can assign permissions in the UI</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="mbl_tbl">
				<h4>List of User Roles</h4>
				<div class="odd_row">
					<p><span class="mbl-strng">Property:</span> System Name</p>
					<p><span class="mbl-strng">Definition:</span> Human readable name</p>
				</div>
				<div class="even_row">
					<p><span class="mbl-strng">Property:</span> System ID</p>
					<p><span class="mbl-strng">Definition:</span> Slug name that is used in the source code</p>
				</div>
				<div class="odd_row">
					<p><span class="mbl-strng">Property:</span> Description</p>
					<p><span class="mbl-strng">Definition:</span> Description of the role</p>
				</div>
				<div class="even_row">
					<p><span class="mbl-strng">Property:</span> Permissions</p>
					<p><span class="mbl-strng">Definition:</span> You can assign permissions in the UI</p>
				</div>
			</div>
			<h4>Creating Roles</h4>
			<p>Permissions will vary based on the user role, which you cannot have duplicate system IDs or system names.</p>
			<img src="img/quarry_manual/add-user-roles.jpg" alt="Add role page, which lets you create name, system ID, 500 character description, and chose permissions" />
			<h2 id="Quarry_API_Key_Management">Quarry API Key Management</h2>
			<h3 id="Creating_Quarry_API_Keys">Creating Quarry API Keys</h3>
			<p>Administrators can create new API keys by using the <b>Register New Key</b> tab found under the <b>API Key Manager</b> menu. Quarry API will accept APIv1 keys as well. A user can own multiple Quarry API keys. New API keys are emailed to the user.</p>
			<div class="dsktp_tbl">
				<table summary="Quarry API Key Information, which uses API key name, e-mail address, and description">
					<caption>OSHA Violation General Duty Standards</caption>
					<thead>
						<tr>
							<th scope="col">API Key Property</th>
							<th scope="col">Definition</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>API key name</td>
							<td>API label given by the user or organization</td>
						</tr>
						<tr>
							<td>Assigned E-mail Address</td>
							<td>User&rsquo;s email address</td>
						</tr>
						<tr>
							<td>Description</td>
							<td>API key description</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="mbl_tbl">
				<h4>Quarry API Key Information</h4>
				<div class="odd_row">
					<p><span class="mbl-strng">API Key Property:</span> API key name</p>
					<p><span class="mbl-strng">Definition:</span> API label given by the user or organization</p>
				</div>
				<div class="even_row">
					<p><span class="mbl-strng">API Key Property:</span> Assigned E-mail Address</p>
					<p><span class="mbl-strng">Definition:</span> User&rsquo;s email address</p>
				</div>
				<div class="odd_row">
					<p><span class="mbl-strng">API Key Property:</span> Description</p>
					<p><span class="mbl-strng">Definition:</span> API key description</p>
				</div>
			</div>			
			<img src="img/quarry_manual/register-key.jpg" alt="Register new API key page, which allows you to name the API key, assign an e-mail address to the key, and write a short description" />
			<h3 id="Quarry_API_Keys">Quarry API Keys</h3>
			<p>The <b>API Key Manager</b> contains a list of API keys. In addition to deleting keys, administrators can block/unblock user keys should the need arises, along with additional features available on this page.</p>
			<img src="img/quarry_manual/list-of-api-keys.jpg" alt="List of API keys page, which allows administrators to view, updated, delete, or block and unblock an individual API key" />
			<h2 id="Dataset_Service_Managemen">Dataset Service Management</h2>
			<p>The <b>Manage Datasets</b> menu allows administrators to configure datasets for the Quarry API REST engine. The definitions in table 6.1 are the main components for the dataset management service.  The connection string parameters are supplied by the data source owner.</p>
			<p>Be mindful that Quarry API v1.0.0 currently supports four database types. </p>
			<h3 id="Supported_Database_Types">Supported Database Types:</h3>
			<ul>
				<li>MySQL</li>
				<li>Microsoft SQL</li>
				<li>Oracle</li>
				<li>PostgreSQL</li>
			</ul>
			<div class="dsktp_tbl">
				<table summary="Quarry Database Query Information, which uses connection string, dat source, dataset, obfuscation, and service to extract information">
					<caption>Quarry Database Query Information</caption>
					<thead>
						<tr>
							<th scope="col">Quarry Data service</th>
							<th scope="col">Definition</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Connection string</td>
							<td>Connection strings are input parameters that allow Quarry to connect to a remote data source</td>
						</tr>
						<tr>
							<td>Data source</td>
							<td>Remote data resource that will be RESTfully accessed by Quarry API</td>
						</tr>
						<tr>
							<td>Dataset</td>
							<td>RESTful data structure based on a user&rsquo;s input</td>
						</tr>
						<tr>
							<td>Obfuscation</td>
							<td>Technique of obscuring the data source&rsquo;s table names for security purposes</td>
						</tr>
						<tr>
							<td>Service</td>
							<td>Quarry provides round trip user input translation services from HTTP to SQL as outlined in list 6.1 Using advance technology lessens the technical learning curve while enhancing the user experience</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="mbl_tbl">
				<h4>Quarry Database Query Information</h4>
				<div class="odd_row">
					<p><span class="mbl-strng">Quarry Data service:</span> Connection string</p>
					<p><span class="mbl-strng">Definition:</span> Connection strings are input parameters that allow Quarry to connect to a remote data source</p>
				</div>
				<div class="even_row">
					<p><span class="mbl-strng">Quarry Data service:</span> Data source</p>
					<p><span class="mbl-strng">Definition:</span> Remote data resource that will be RESTfully accessed by Quarry API</p>
				</div>
				<div class="odd_row">
					<p><span class="mbl-strng">Quarry Data service:</span> Dataset</p>
					<p><span class="mbl-strng">Definition:</span> RESTful data structure based on a user&rsquo;s input</p>
				</div>
				<div class="even_row">
					<p><span class="mbl-strng">Quarry Data service:</span> Obfuscation</p>
					<p><span class="mbl-strng">Definition:</span>  	Technique of obscuring the data source&rsquo;s table names for security purposes</p>
				</div>
				<div class="odd_row">
					<p><span class="mbl-strng">Quarry Data service:</span> Service</p>
					<p><span class="mbl-strng">Definition:</span> Quarry provides round trip user input translation services from HTTP to SQL <br> as outlined in list 6.1 Using advance technology lessens the technical learning curve while enhancing the user experience</p>
				</div>
			</div>			
			<h3 id="Typical_Configuration_Sequence_of_Quarry_API_Data_Service">Typical Configuration Sequence of Quarry API Data Service</h3>
			<ol>
				<li>The application manager will contact the data source owner for the connection string information.</li>
				<li>The application manager will request that the data source owner provides an obfuscated  list of available table names.</li>
				<li>The application manager will add a dataset by selecting the appropriate database type and entering the connection string parameters including the obfuscated table name information.</li>
				<li>Test the new connection string   for datasets using Quarry&rsquo;s AdminUI. You can see the datasets information in either JSON or XML format, dependent on your choice.</li>
				<li>If you   are able to successfully connect to a data source, but cannot retrieve data, contact the data source owner and check if the remote configuration is working or whether the database has data.</li>
			</ol>
			<h3 id="Add_Data_Service">Add Data Service</h3>
			<p>Obtain connection string parameters from the data source owner.  Use table 6.2 as a reference. If the owner does not have the database type listed, Quarry API cannot offer service. Please note which fields in this table are required, optional or not applicable depending on the database type (MySQL, Microsoft SQL, Oracle and PostgreSQL).</p>
			<div class="dsktp_tbl">
				<table summary="Quarry Database Fields, which include FQDN/IP Address, user name, password, database name, schema, table name, and a few more">
					<caption>Quarry Database Fields</caption>
					<thead>
						<tr>
							<th scope="col">Database Parameters</th>
							<th scope="col">MySQL</th>
							<th scope="col">Microsoft SQL</th>
							<th scope="col">Oracle</th>
							<th scope="col">PostgreSQL</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">FQDN/IP Address</th>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
						</tr>
						<tr>
							<th scope="row">API Username</th>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
						</tr>
						<tr>
							<th scope="row">API Password</th>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
						</tr>
						<tr>
							<th scope="row">DB Name</th>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
						</tr>
						<tr>
							<th scope="row">Instance</th>
							<td>N/A</td>
							<td>Optional</td>
							<td>N/A</td>
							<td>N/A</td>
						</tr>
						<tr>
							<th scope="row">Schema</th>
							<td>N/A</td>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
						</tr>
						<tr>
							<th scope="row">Table Name</th>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
						</tr>
						<tr>
							<th scope="row">Alias</th>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
						</tr>
						<tr>
							<th scope="row">Column Name</th>
							<td>Optional</td>
							<td>Optional</td>
							<td>Optional</td>
							<td>Optional</td>
						</tr>
						<tr>
							<th scope="row">SID or Service Name</th>
							<td>N/A</td>
							<td>N/A</td>
							<td>Optional</td>
							<td>N/A</td>
						</tr>
						<tr>
							<th scope="row">Port</th>
							<td>Optional</td>
							<td>Optional</td>
							<td>Optional</td>
							<td>Optional</td>
						</tr>
						<tr>
							<th scope="row">Description</th>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
							<td>Required</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="mbl_tbl">
				<h4>Quarry Database Fields</h4>
				<div class="odd_row">
					<p class="mbl-strng">Database Parameters: FQDN/IP Address</p>
					<p><span class="mbl-strng">MySQL:</span> Required</p>
					<p><span class="mbl-strng">Microsoft SQL:</span> Required</p>
					<p><span class="mbl-strng">Oracle:</span> Required</p>
					<p><span class="mbl-strng">PostgreSQL:</span> Required</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Database Parameters: API Username</p>
					<p><span class="mbl-strng">MySQL:</span> Required</p>
					<p><span class="mbl-strng">Microsoft SQL:</span> Required</p>
					<p><span class="mbl-strng">Oracle:</span> Required</p>
					<p><span class="mbl-strng">PostgreSQL:</span> Required</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Database Parameters: API Password</p>
					<p><span class="mbl-strng">MySQL:</span> Required</p>
					<p><span class="mbl-strng">Microsoft SQL:</span> Required</p>
					<p><span class="mbl-strng">Oracle:</span> Required</p>
					<p><span class="mbl-strng">PostgreSQL:</span> Required</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Database Parameters: DB Name</p>
					<p><span class="mbl-strng">MySQL:</span> Required</p>
					<p><span class="mbl-strng">Microsoft SQL:</span> Required</p>
					<p><span class="mbl-strng">Oracle:</span> Required</p>
					<p><span class="mbl-strng">PostgreSQL:</span> Required</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Database Parameters: Instance</p>
					<p><span class="mbl-strng">MySQL:</span> N/A</p>
					<p><span class="mbl-strng">Microsoft SQL:</span> Optional</p>
					<p><span class="mbl-strng">Oracle:</span> N/A</p>
					<p><span class="mbl-strng">PostgreSQL:</span> N/A</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Database Parameters: Schema</p>
					<p><span class="mbl-strng">MySQL:</span> N/A</p>
					<p><span class="mbl-strng">Microsoft SQL:</span> Required</p>
					<p><span class="mbl-strng">Oracle:</span> Required</p>
					<p><span class="mbl-strng">PostgreSQL:</span> Required</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Database Parameters: Table Name</p>
					<p><span class="mbl-strng">MySQL:</span> Required</p>
					<p><span class="mbl-strng">Microsoft SQL:</span> Required</p>
					<p><span class="mbl-strng">Oracle:</span> Required</p>
					<p><span class="mbl-strng">PostgreSQL:</span> Required</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Database Parameters: Alias</p>
					<p><span class="mbl-strng">MySQL:</span> Required</p>
					<p><span class="mbl-strng">Microsoft SQL:</span> Required</p>
					<p><span class="mbl-strng">Oracle:</span> Required</p>
					<p><span class="mbl-strng">PostgreSQL:</span> Required</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Database Parameters: Column Name</p>
					<p><span class="mbl-strng">MySQL:</span> Optional</p>
					<p><span class="mbl-strng">Microsoft SQL:</span> Optional</p>
					<p><span class="mbl-strng">Oracle:</span> Optional</p>
					<p><span class="mbl-strng">PostgreSQL:</span> Optional</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Database Parameters: SID or Service Name</p>
					<p><span class="mbl-strng">MySQL:</span> N/A</p>
					<p><span class="mbl-strng">Microsoft SQL:</span> N/A</p>
					<p><span class="mbl-strng">Oracle:</span> Optional</p>
					<p><span class="mbl-strng">PostgreSQL:</span> N/A</p>
				</div>
				<div class="odd_row">
					<p class="mbl-strng">Database Parameters: Port</p>
					<p><span class="mbl-strng">MySQL:</span> Optional</p>
					<p><span class="mbl-strng">Microsoft SQL:</span> Optional</p>
					<p><span class="mbl-strng">Oracle:</span> Optional</p>
					<p><span class="mbl-strng">PostgreSQL:</span> Optional</p>
				</div>
				<div class="even_row">
					<p class="mbl-strng">Database Parameters: Description</p>
					<p><span class="mbl-strng">MySQL:</span> Required</p>
					<p><span class="mbl-strng">Microsoft SQL:</span> Required</p>
					<p><span class="mbl-strng">Oracle:</span> Required</p>
					<p><span class="mbl-strng">PostgreSQL:</span> Required</p>
				</div>
			</div>
			<p>Figure 6.1 shows how to connect to an Oracle data source to Quarry. Please use table 6.1 as a guide to which fields are necessary.</p>			
			<img src="img/quarry_manual/add-data-string.jpg" alt="Database connection string page, which asks for database type, IP address, use name, password, and a few more fields" />			
		</div>
  </section>
  </div>
</div>
</div>