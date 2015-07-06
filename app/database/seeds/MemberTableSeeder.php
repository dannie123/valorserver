<?php
 
class MemberTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('members')->delete();
 
        Member::create(array(
            'status' => '1',
            'picture_url' => 'https://media.licdn.com/mpr/mprx/0_5J73_7K',
            'join_date' => '2015-01-01',
            'first_name' => 'Wiley',
            'last_name' => 'Coyote',
            'title' => 'Genius',
            'company' => 'Acme',
            'email_address' => 'Wiley.Coyote@acme.com',
            'linked_in_url' => 'http://www.linkedin.com/profile/view?id=37998800&authType=name&authToken=2KZa&trk=api*a3098983*s3173973*',
            'class_year' => '1992'

        ));
 
        Member::create(array(
            'status' => '0',
            'picture_url' => 'https://media.licdn.com/mpr/mprx/0_5J75_7K',
            'join_date' => '2015-01-02',
            'first_name' => 'John',
            'last_name' => 'Doe',
            'title' => 'Web Developer',
            'company' => 'Microsoft',
            'email_address' => 'John.Doe@microsoft.com',
            'linked_in_url' => 'http://www.linkedin.com/profile/view?id=37999999&authType=name&authToken=2KZa&trk=api*a3098983*s3173973*',
            'class_year' => '1989'

        ));

        Member::create(array(
            'status' => '1',
            'picture_url' => 'https://media.licdn.com/mpr/mprx/0_5J75_7K',
            'join_date' => '2015-01-02',
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'title' => 'Web Developer',
            'company' => 'Microsoft',
            'email_address' => 'Jane.Doe@microsoft.com',
            'linked_in_url' => 'http://www.linkedin.com/profile/view?id=37999999&authType=name&authToken=2KZa&trk=api*a3098983*s3173973*',
            'class_year' => '1988'

        ));

        Member::create(array(
            'status' => '1',
            'picture_url' => 'https://media.licdn.com/mpr/mprx/0_5J75_7K',
            'join_date' => '2015-01-02',
            'first_name' => 'Marky',
            'last_name' => 'Mark',
            'title' => 'Expert',
            'company' => 'Some Company',
            'email_address' => 'Marky.Mark@microsoft.com',
            'linked_in_url' => 'http://www.linkedin.com/profile/view?id=37999999&authType=name&authToken=2KZa&trk=api*a3098983*s3173973*',
            'class_year' => '1987'

        ));


        Member::create(array(
            'status' => '1',
            'picture_url' => 'https://media.licdn.com/mpr/mprx/0_5J75_7K',
            'join_date' => '2015-01-02',
            'first_name' => 'Patar',
            'last_name' => 'Petrovic',
            'title' => 'Smth',
            'company' => 'Some Company',
            'email_address' => 'Marky.Mark@microsoft.com',
            'linked_in_url' => 'http://www.linkedin.com/profile/view?id=37999999&authType=name&authToken=2KZa&trk=api*a3098983*s3173973*',
            'class_year' => '1987'

        ));

        Member::create(array(
            'status' => '1',
            'picture_url' => 'https://media.licdn.com/mpr/mprx/0_5J75_7K',
            'join_date' => '2015-01-02',
            'first_name' => 'Test',
            'last_name' => 'Test',
            'title' => 'Smth',
            'company' => 'Some Company',
            'email_address' => 'Test.Test@microsoft.com',
            'linked_in_url' => 'http://www.linkedin.com/profile/view?id=37999999&authType=name&authToken=2KZa&trk=api*a3098983*s3173973*',
            'class_year' => '1987'

        ));

        Member::create(array(
            'status' => '1',
            'picture_url' => 'https://media.licdn.com/mpr/mprx/0_5J75_7K',
            'join_date' => '2015-01-02',
            'first_name' => 'Test',
            'last_name' => 'Test',
            'title' => 'Smth',
            'company' => 'Some Company',
            'email_address' => 'TestNew.Test@microsoft.com',
            'linked_in_url' => 'http://www.linkedin.com/profile/view?id=37999999&authType=name&authToken=2KZa&trk=api*a3098983*s3173973*',
            'class_year' => '1987'

        ));
    }
 
}
