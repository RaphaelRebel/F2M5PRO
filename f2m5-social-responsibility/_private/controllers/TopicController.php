<?php

namespace Website\Controllers;

use mysqli;

/**
* Dit handelt het mail
 *
 */
class TopicController
{

	public function index()
	{

		$topics = getAllTopics();

        $template_engine = get_template_engine();
		echo $template_engine->render('blog/topics', ['topics' => $topics]);
	}
	
	public function new()
	{

		$topics = getAllTopics();

        $template_engine = get_template_engine();
		echo $template_engine->render('blog/new');
	}
	public function save()
	{
		$result = validateTopicData($_POST);
		if (count($result['errors']) === 0) {
			//Blog opslaan
			createTopic($result['data']['title'], $result['data']['description']);
			redirect(url('topics.index'));
		}
		$template_engine = get_template_engine();
		echo $template_engine->render('blog/new', ['errors' => $result['errors']]);
    }
}