//this file contains the data required to populate thecontent div
var data = {
	home : {
		sections : 1,
		titles : {
			0 : 'Welcome'
		},
		contents : {
			0 : ''
		}
	},
	events : {
		sections : 2,
		titles : {
			0 : 'Upcoming Events',
			1 : 'Past Events'
		},
		contents : {
			0 : '<div class="heading">Event 1\
			<div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu lectus dolor. Phasellus bibendum adipiscing mi, ac accumsan sem. Nullam convallis tortor id magna pellentesque.</div>\
			</div>\
			<div class="heading">Event 2</div>\
			<div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu lectus dolor. Phasellus bibendum adipiscing mi, ac accumsan sem. Nullam convallis tortor id magna pellentesque.</div>\
			',
			1 : '<div class="heading">Event 1\
			<div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu lectus dolor. Phasellus bibendum adipiscing mi, ac accumsan sem. Nullam convallis tortor id magna pellentesque.</div>\
			</div>\
			<div class="heading">Event 2</div>\
			<div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu lectus dolor. Phasellus bibendum adipiscing mi, ac accumsan sem. Nullam convallis tortor id magna pellentesque.</div>\
			'
		}
	},
	team : {
		sections : 2,
		titles : {
			0 : 'Current Team',
			1 : 'Past Teams'
		},
		contents : {
			0 : '',		//make table
			1 : ''		//make another table
						// I wish 'make' worked here. :( Not even sudo make
		}
	},
	about : {
		sections : 1,
		titles : {
			0 : 'About us'
		},
		contents : {
			0 : '<div class="heading"></div>'
		}
	},
	contact : {
		sections : 1,
		titles : {
			0 : 'Contact us'
		},
		contents : {
			0 : ''
		}
	}
}