C R U D L
r e p e i
e a d l s
a d a e t
t   t t
e   e e


Controllers: 
Index.php
	index function - list all the catagories (forum in catagories)
	(Basically a "show main page")
User.php
	List function
	Get function
	Register function
	Delete function?
Topic.php
	Create function
	Update function?
	View function = List of Posts
	Delete function?
Forum.php
	List function (Topics)
	Create function
	Update function?
Catagory.php
	List function (Forums)
	Create function
	Update function?
Post.php
	Create function
	Update function?
	Delete function?
	Search function?

for all create functions of controllers (Get and Post methods)

Views:
Index
	Catagory: $catagories: array
	$Forum: array
			|> $name
	$Name: String
User
	User_List 
	$Users: array
			|> $name
	User_Get
	$users
		|> $name
	User_Register
	Nothing!!
	No Data!!
Topic
	Topic_Create
	$Forum
		|> author
	Topic_View
	$Topic
		|> $name
		|>$posts = arrays
						|> message
						|> user
							|> name
						|> CreatedAt = timestamp
Forum
	Forum_Create
	$catagory
		|> name
	$author
	
	  Forum_List
	$forum
		|> topics
			|> author
		|> name		
Catagory_Create
	Nunca
	$author
Post_Create
	$topic
	$author




$cats = array(array())
	$catagory
		|> Forums
	$categories[0] -> forums[0] -> name