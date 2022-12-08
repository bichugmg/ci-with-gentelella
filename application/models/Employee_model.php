<?php

class Employee_model extends CI_Model
{   
    function __construct(){
            parent::__construct();
            //load our second db and put in $db2
            $this->db2 = $this->load->database('automation', TRUE);
        }
        
        public function get_entity_count_db1($entity_name,$entity_column,$entity_table)
      {
        $this->load->database();
        $this->db->where("$entity_column", $entity_name);
        $query = $this->db->get("$entity_table");
        $num = $query->num_rows();
        $data["data"]=$query->row();
        $data["count"]=$num;
        return $data;
      }
    
    public function get_entity_count($entity_name,$entity_column,$entity_table)
      {
        $this->load->database();
        $this->db2->where("$entity_column", $entity_name);
        $query = $this->db2->get("$entity_table");
        $num = $query->num_rows();
        $data["data"]=$query->row();
        $data["count"]=$num;
        return $data;
      }
        
	public function login($email_id,$pwd)
      {
        $this->db2->join('usertype', 'usertype.usertypeID = user.usertypeID','left');
        $this->db2->where("email", $email_id);
        $this->db2->where("pwd", md5($pwd));
        $query = $this->db2->get("user");
        $num = $query->num_rows();
        $data["data"]=$query->row();
        $data["count"]=$num;
        return $data;
      }
      
      public function insert_profile($data)
      {
        $this->db2->insert("user", $data);
        $last_id=$this->db2->insert_id();
        return $last_id;
      }
      
      public function fetch_course_types(){

        $this->db2->order_by("course_type_id", "asc");
		$query = $this->db2->get('course_type');
		return $query->result_array();
	}
	
	public function get_course_data($id)
      {
        $this->db2->order_by("course_name", "asc");
        $this->db2->where("course.course_type_id", $id);
        return $this->db2->get("course");
      }
      
    public function get_stream_data($id)
      {
        $this->db2->order_by("course_stream_name", "asc");
        $this->db2->where("course_stream.course_id", $id);
        return $this->db2->get("course_stream");
      }
	
      public function fetch_districts(){

        $this->db2->order_by("district_id", "desc");
		$query = $this->db2->get('district');
		return $query->result_array();
	}
	
	public function fetch_regions(){

        $this->db2->order_by("region_name", "asc");
		$query = $this->db2->get('region');
		return $query->result_array();
	}
	
	public function fetch_usertypes(){

        $this->db2->order_by("usertype", "asc");
		$query = $this->db2->get('usertype');
		return $query->result_array();
	}
	
	public function get_region_data($id)
      {
        $this->db2->order_by("region_name", "asc");
        $this->db2->where("region.district_id", $id);
        return $this->db2->get("region");
      }
      
    public function get_branch_data($id,$id_2)
      {
        $this->db2->order_by("group", "asc");
        $this->db2->where("studentgroup.region_id", $id);
        $this->db2->or_where("studentgroup.region_id", $id_2);
        return $this->db2->get("studentgroup");
      }
	
	public function fetch_branches(){

        $this->db2->order_by("group", "asc");
		$query = $this->db2->get('studentgroup');
		return $query->result_array();
	}

	public function fetch_subjects(){

        $this->db2->order_by("popular", "asc");
        $this->db2->order_by("subject_name", "asc");
		$query = $this->db2->get('subjects');
		return $query->result_array();
	}
      
    public function update_profile($data,$userID)
      {
        $this->db2->where("userID", $userID);
        $this->db2->update("user", $data);
      }
      
    public function insert_trainer_branch($data)
      {
        $this->db2->insert("trainer_branch", $data);
      }
      
    public function insert_trainer_subject($data)
      {
        $this->db2->insert("trainer_subject", $data);
      }
      
    public function fetch_profile($userID)
      { 
        $this->db2->join('usertype', 'usertype.usertypeID = user.usertypeID','left');
        $this->db2->where("userID", $userID);
        $query = $this->db2->get("user");
        $num = $query->num_rows();
        $data["data"]=$query->row();
        $data["count"]=$num;
        return $data;
      }
      
      public function fetch_prefered_branches($userID)
      {
        $this->db2->where("userID", $userID);
        $query = $this->db2->get("trainer_branch");
        return $query->result_array();
      }
      
      
      public function fetch_prefered_subjects($userID)
      {
        $this->db2->where("userID", $userID);
        $query = $this->db2->get("trainer_subject");
        return $query->result_array();
      }
      
      public function delete_prefered_branches($id)
      {
        $tables = array('trainer_branch');
        $this->db2->where("userID", $id);
        $this->db2->delete($tables);
      }
      
      public function delete_prefered_subjects($id)
      {
        $tables = array('trainer_subject');
        $this->db2->where("userID", $id);
        $this->db2->delete($tables);
      }
        
      public function fetch_branch($branch_id)
      { 
        $this->db2->join('region', 'region.region_id = studentgroup.region_id');
        $this->db2->join('district', 'district.district_id = region.district_id');
        $this->db2->join('zone', 'zone.district_id = district.district_id');
        $this->db2->where("studentgroupID", $branch_id);
        $query = $this->db2->get("studentgroup");
        $num = $query->num_rows();
        $data["data"]=$query->row();
        $data["count"]=$num;
        return $data;
      }
      
      public function fetch_region($region_id)
      { 
        $this->db2->join('district', 'district.district_id = region.district_id');
        $this->db2->join('zone', 'zone.zone_id = district.zone_id');
        $this->db2->where("region_id", $region_id);
        $query = $this->db2->get("region");
        $num = $query->num_rows();
        $data["data"]=$query->row();
        $data["count"]=$num;
        return $data;
      }
      
      public function fetch_course($course_stream_id)
      { 
        $this->db2->join('course', 'course.course_id = course_stream.course_id');
        $this->db2->join('course_type', 'course_type.course_type_id = course.course_type_id');
        $this->db2->where("course_stream_id", $course_stream_id);
        $query = $this->db2->get("course_stream");
        $num = $query->num_rows();
        $data["data"]=$query->row();
        $data["count"]=$num;
        return $data;
      }
      
      public function insert_referral($data)
      {
        $this->db2->insert("leads", $data);
      }
      
      public function insert_leave($data)
      {
        $this->db2->insert("leaveapp", $data);
      }
      
      public function get_leaves($userid)
      {
        
        $this->db2->where("leaveapp.userID", $userid);
        $query = $this->db2->get('leaveapp');
        return $query->result();
      }
      
      public function emp_get_leaves($userid)
      {
        $this->db2->order_by("leave_id", "desc");
        $this->db2->join('user', 'user.userID = leaveapp.userID');
        $query = $this->db2->get('leaveapp');
        return $query->result();
      }
      
      public function events_data()
      {
        $query = $this->db->get('event');
        return $query->result();
      }
      
      
      
      public function get_event_data($event_id)
      {
        
        $this->db->where("registration.event_id", $event_id);
        $query = $this->db->get('registration');
        return $query->result();
      }
      
      
      public function get_single_event_data($event_id)
      {
        $this->db->where("event.event_id", $event_id);
        $this->db->join('event_fields', 'event_fields.event_fields_type_id = event.event_fields_type');
        $query = $this->db->get('event');
        return $query->row();
      }
      
      
      
      public function emp_get_leave($leave_id)
      {
        $this->db2->where("leaveapp.leave_id", $leave_id);
        $query = $this->db2->get('leaveapp');
        return $query->row();
      }
      
      public function update_data($table_name,$column_name,$column_value,$data)
      {
        $this->db2->where("$column_name", $column_value);
        $this->db2->update($table_name, $data);
      }
      
      public function get_referrals($userid)
      {
        $this->db2->join('studentgroup', 'studentgroup.studentgroupID = leads.to_meet_usertypeID');
        $this->db2->join('region', 'region.region_id = studentgroup.region_id');
        $this->db2->join('district', 'district.district_id = region.district_id');
        $this->db2->join('zone', 'zone.zone_id = district.zone_id');
        $this->db2->join('state', 'state.state_id = zone.state_id');
        $this->db2->join('country', 'country.country_id = state.country_id');
        $this->db2->join('course_available', 'course_available.course_available_id = leads.course_id','left');
        $this->db2->join('user', 'user.userID = leads.updated_by','left');
        $this->db2->order_by("visitorID", "desc");
        $this->db2->where("to_meet_personID", 2);
        $this->db2->where("leads.userID", $userid);
        $query = $this->db2->get('leads');
        return $query->result();
      }
      
      public function insert_common($table_name,$data)
      {
        $this->db2->insert("$table_name", $data);
      }
      
      
      public function get_bank_data($userID)
      {
        $this->db2->where("userID", $userID);
        $query = $this->db2->get("user");
        $num = $query->num_rows();
        $data["data"]=$query->row();
        $data["count"]=$num;
        return $data;
      }
      
      public function fetch_trainer_data()
      {
        $this->db2->select('*');
        $this->db2->from('trainer');
        $this->db2->join('course_stream', 'course_stream.course_stream_id = trainer.course_stream');
        $this->db2->join('course', 'course.course_id = course_stream.course_id');
        $this->db2->order_by("last_update_on", "desc");
        $this->db2->where("completion", 1);
        // $this->db2->where("trainer_id", 1);
        $query = $this->db2->get();
        return $query;
      }
      
      public function fetch_employee_data()
      {
        $this->db2->select('*');
        $this->db2->from('user');
        $this->db2->join('usertype', 'usertype.usertypeID = user.usertypeID','left');
        $this->db2->join('course_stream', 'course_stream.course_stream_id = user.course_stream');
        $this->db2->join('course', 'course.course_id = course_stream.course_id');
        $this->db2->order_by("name", "asc");
        $this->db2->where("completion", 1);
        // $this->db2->where("trainer_id", 1);
        $query = $this->db2->get();
        return $query;
      }
      
      public function import()
      {
          $hash_array=array("0f86d05f678c95b457750d9db06731fd","83799fd939ae0582340229b69af2e086","6419c644c5e1919c74caeede5286ec87","560596777f211adca70895d6afb6760e","b7e7275a04d547d6c1c5606028885898","3f0fafd68b96a6680bb5323756026530","4455f8289e80c4efab32ee1bb903fb2a","34efcbe1b33157828d6277fbf93a0057","951f035803cb81f8eb7a165ea271ddb7","455527b734f21d55253f9288293b82d9","feed5c26ebb6006dbde7ed9bb2a4d6a3","134e21e7ee7f3ac0282ec74200f173ff","4adacf955f929734e4c2c5ee393de21d","9f9802765cf08d0373d830be57c9cffe","4409bdacab7d8e73f8dbfe80b8fe69cc","b653f02b03becc0574cbce4ef317fe32","ad450d6f30997cbfa14dfc46ff24668d","4446feb7e51726b0784a33ee847adc10","15e987ee74faccfea983a38092fe5857","1ef5ad673c3490b59856f083c569a197","59555033459e55c76e3a1bd080a8c205","94767003488e2c186226a83f0d56f94f","eac21b0d90502e8f9b60357353744e09","c8eb9cf8ddba2a4d4e7f8a00628542b3","2431e6abf9cd4a1078954fad1adcd372","c2058c5259aadd794710eade9eea6146","299eaf9c3b21b357f1f561dfd8519fc8","bb72c183934989260095c43ffbce31de","d072c6b874fb9b5dd91e4ec49e6dc43a","69ee76715ab89c63d831c457fbf3eb84","2dc1478958c662ae71187bd353f9281d","71559f1209c8595a4afec0b2b3930be7","3661702e9de7888359ded5bdafbd8b80","b80a62a8c33664e713b6eb431db61947","b99edf7274e1fbaa71d734ecafbf7d45","fa392e2bc88a39b0a9b801d592582aae","17aea45186c1a61d88ee317f4bfb68a6","989af11c5f00d0cdee6497f610c6b1e8","201c36039cad72699641545b6784a669","4cc3a54bd26adf637ffe51eabba7198f","c13cafb84703511d88acdf6a27acda93","715d60b1d48f9aa9b20e3119992df384","1f5f9173c042d5157f9f2794ca3fb741","5da9e092a2783f3b6f0482b8b2ee9b6b","569e6a21c8588685309e1c107131638b","bfa6a7c991387801a2c5f99f75a6d689","7de242a6edd5a85466ec9a9315d6d064","b16e25c7b0a524cbfa89b38c6acb114b","7575f774a4924ddf3d0da98b8a718061","0baec4d52942d86fcd20325d49b19ebc","3362864b78de3b93343892031b186a73","ea168a0975626d567a8866189acd584c","e66b9f489ad58bb20c8cc56a4cdea3c1","ee64e0677119f7a336f28049661f785e","38fa5b49e6c70f46ae23f596b001e364","2fc99902ac8c489b913895142859f6a6","fc8677e6ec578cbfe6dfbffb65932d66","064c284a26840ae5839b6dcc4ef6ba9a","17cf0ae88ebba4c68ad2f965411aabbb","6844fb8fa8ee6d83e32a2499e93d41a7","ba9ed6ba7a26f18b667610a1a67c6bee","19a2d115b5f6ed51982374aba5af7e01","106d28ed75e3df2c38f5fcfc14cf61af","e90591369e3f42ac2cf90dbe25372d1d","385441af18be8c229f28d0dadd326706","bce090bff38db8aa2d16ff96a8a32efa","56867645c23be17200e3a00e1f1ff0b5","6bdd6256cc63ec4ac4517c7ed0bfa5fa","4734223df71b2168830e6e23cec3bff8","b5c0356fc114a8e990bef38c0bb1699c","558a561b11aab4f7f0de44ae2b73b189","6c8b1231ec6cc4a7f3552001097f40d8","4b52676dc42791171dbc236d04f9e692","af8316412c436ad7a2025937839ccfcb","3cad2099d6ffb9c0e233c14e43a9cedf","6102ace57b5730380b5a5e86e6f8112a","5f1c38458c9b41d129b9116c69f7bfe7","f69272a9cd96e619f13cc8dd2c71d65f","d015abe0e5f0d927a59c411bc01104d6","18849b5db570fe1395a2149de291b2a4","b558ae8b5ae91cbaaa3eba798b8dc97e","28c23cb308afb5e67cd399ae2fdc8fe2","feed5c26ebb6006dbde7ed9bb2a4d6a3","feed5c26ebb6006dbde7ed9bb2a4d6a3","feed5c26ebb6006dbde7ed9bb2a4d6a3","ee64e0677119f7a336f28049661f785e","989af11c5f00d0cdee6497f610c6b1e8","989af11c5f00d0cdee6497f610c6b1e8","22d711bf7f67e732ae809ee88d6da3f8","cfcd208495d565ef66e7dff9f98764da","53ecafd0cf92677f84d5fab8b148a217","cb2e3c307f8274c821d15da7f7dcdc60","cfcd208495d565ef66e7dff9f98764da","07a707829e34b4f6fd6b7467ddefa49d","4a15a7296cc165e83ccaf670b144e277","8863986f3271287586f84c29488e4fc5","527f17b905caa3484d20a5ee99f477a2","27fb8e3dcd1e16403a63d868569c7f20","7217b848caa49619a5933fe25d54ae67","2afbba76fa593e6172a1a989712a92a7","877745ada731d5238ccb54af40219fa0","0b3875c9053a400254815c062eca7236","9c1cfed76a4b74df382a9b0f866306b5","a1a19f7db599c63f90e5a3d3866c492c","1719ed7f8980bfdbe1d802ba20dd0f83","de204f1f26c8ddab5638be13f536d058","3e7effebe479e1f3651e1e6dd9e02df7","994561a4429bb05a6648dd7b91efcde8","18991fd4aadac4b3c31f25c4fa9591c6","db5cdccbc552be8afcde268cccf728df","499427ea3191ca41ff34adb4016b06ff","d15ec731db3ea4e618d5e4cb8b6f4d6c","22d711bf7f67e732ae809ee88d6da3f8","0ece75a486a233f9d22cc26792850d66","a3ab846d4e114a72b43884f1a6c20f7d","abf76d73e28d0c24acc595e943c60741","f792c86f4b0544e81db2e1b2a282c3cf","4b1c332bc88a65c74e450130e1300e68","011734cc31d93b450dd839a08e812515","9276b47ccd9b8628b5b7c85f6d3e94f7","138943b48cce730d471dba8822a6244a","d419748743c8a82886a80695d99bd89a","6a697213ab55f5d49f06f15b9126d542","0bf6c5bfafb1c5e31ae5eb64977ba8fb","abc7a4f2cee1cea75fc755bb5dd76b50","f65ac90a558e6c5a0f72099df878d0cf","7b7bab9b1da0a43c113a6caff4de6498","25d81b058e43c2a83da4b1c65346d698","056e91ea6a009fef3b093e31cbe5051b","a8e59895401d11d5dfc857cd5f277970","b0baf6ed4e7799b5f49dec72cfe617a4","05955884ce806eaf606be9c3db86fa09","cb2e3c307f8274c821d15da7f7dcdc60","0323310bdba7222a911e1fc75b41b3a5","f3413fc9613e2fa9a2b8ad75923cfba6","924d88f1e180ee4c77cadb4d846c0088","70ce852787e055715728ce4d48bca02b","8d6115e09649389f086b42f2c5bd8687","37d3d091883cbd4194cb32f6502d737f","75f84e49405e828718e56c659de4e3a7","ff9c6cd06b038ac51fd4de5593fcbf8d","a7ce2ffc57117e5448362847e3d07fc1","f6e8da16b4708179597e6396d3813add","755d594b8c949daeed11a99250de2562","295d36c286d77ee899a2685a2d3f46f6","7dc9da1fa4045c74985cf4b0c067e6ab","989af11c5f00d0cdee6497f610c6b1e8","989af11c5f00d0cdee6497f610c6b1e8","b80a62a8c33664e713b6eb431db61947","6419c644c5e1919c74caeede5286ec87","134e21e7ee7f3ac0282ec74200f173ff","4cc4263d8a9314b25090ba5877d188f7","a085a0bf00faaff397c003ab608586bd","a49aec55520d55fd89da5cb54cf008de","c75c197b59a1a69cb0fe8c11dc11ba4f","cfcd208495d565ef66e7dff9f98764da","3962566bdcf0f4e51fcc7ceb6db818f3","cd57fec3c80c5d78fe507be4081d951d","ddca7671dc8f53d50cf4f9bc54fff971","72b3c1154faa0ce28eacb18dffbebdb0","8b7861b09bf6b05f21e26da83274c5c1","4bc52334f0c9dd3297275be8a7ae7bf4","e26b959782543093b1d5398dbf731a7c","d95d2035d5c191cc98fe849f35ce315d","57162f56e084038e093633e1621f01de","1d04e5bbc342e6bceb2de53f142d192b","cfcd208495d565ef66e7dff9f98764da","8c1fbea30ee80f66aecf19f232344777","bfe8e93c1fc762d3fc62ebc6cde2f587","2c2de85dad1e997113c09aacae81fbb8","05aa8ab5f8b0303a720f9f41fb3549ec","64226d004af4e1387dc9189f49a2c212","182cadda0375531560b7f72822c293e9","63e455426eb5ebb8bab2cc86d0b62b59","26a133038631720bf3b69536b27497f5","cfcd208495d565ef66e7dff9f98764da","9e82715c8a17898003e0f98aa24840bf","cfcd208495d565ef66e7dff9f98764da","6cda2597ebebf036106d0c30ca409fc4","c7e77df4bb2c74b448dd7eec86928128","ef28def7c47897dbe6066e419cc78536","056e91ea6a009fef3b093e31cbe5051b","ba9ed6ba7a26f18b667610a1a67c6bee","b9ebbe26f736a61fb88a034e08ebd441","8eb705ab8a26eb7c07a3d8246d1bb5ef","70a58ae6f7ecbdf66a6b8c79a3ae824c","4a6fcf7595a1be33498b79484e6204cd","63fe137fe230f7b80228b55958b0e7b9","26998d0ef34dfa69837590ad3a5592c1","45fb34696bdca43528598bca8a383ce8","cfcd208495d565ef66e7dff9f98764da","e92a0a3c21bb212e48e836f39499da55","2ebc72eab11a1c45f73cee51ecffc5a1","c4af9a6254ddf45f884b52e7ebe02d29","eaa60fd2c1e54458b057174654d73b45","712443c1b976bee27d312839639366a5","b37b63f87234f008902aada6a2332738","eeab5ab57360e5f7b7a153f6614aa408","4ee3cd1ef20f1f39668d89dc82eb4850","c116b0ae26d77be9c42f086a4c8aef76","bed8f15c07e356afa9a1b55b9b584f2c","3f0fafd68b96a6680bb5323756026530","a1a19f7db599c63f90e5a3d3866c492c","8863986f3271287586f84c29488e4fc5","89b1e5fed9cfe3b4ca74b3ef4ab59202","83799fd939ae0582340229b69af2e086","63e455426eb5ebb8bab2cc86d0b62b59","bb72c183934989260095c43ffbce31de","bed5d765ed1d3f860237f85d75921e3a","29de8f6bebe887b2bcb5da28b91288bc","49e092e359896e2e2c265063737801d4","c13cafb84703511d88acdf6a27acda93","83a5d01c753e17b9e730fdec32e5f6ad","6bdaecdc8d2e3bced27730a4dad0641d","b8b6acb7179f48d600ab770fac22c68c","e5bd6a4851e668eeb25f193d08cf8575","a4d6fbf58a6d22d0d128597554343208","5b5cf5538965dff79f1779aac4a0eb04","8414c48e6e38ccc8a0408dd1076065d5","2fbe269ac101e500994c014b0cc90091","f6b3765b0743ca19816ae0188fc94df1","bdb8f9c54d08a599c0a3038b79d43988","ae3fd5ce1474507027b857ae0e002279","07d4e4a38ebb4ccfc6a1712b7f62b46b","2ff6341fa613bce12afc2ed4bdd252c3","7dc9da1fa4045c74985cf4b0c067e6ab","c74d3ccf75ce7c90e8b8ff2cbbb58e2a","9cc9a6669c3361b7e9462a0bf8d64e2e","1f5970608aeddfbca391e571361cba11","b25c94f66a21ccd86fb9f551e9e357c8","94767003488e2c186226a83f0d56f94f","94767003488e2c186226a83f0d56f94f","ca58ad3771c6d038853b519f79c67edd","2c5d23d90036aa2459d2f0b66d9b73a1","d5ef82c2be6a423e9bf357abdecea0db","2111a99106d493b0225e8662f649f5e5","c13cafb84703511d88acdf6a27acda93","ad450d6f30997cbfa14dfc46ff24668d","8e4697603886d2e22a654021256192d5","b9c00b1ee745db9c36ddf03679fbe41b","9926c07a31983b900bb2175283d880bb","ba9ed6ba7a26f18b667610a1a67c6bee","bfa6a7c991387801a2c5f99f75a6d689","2b5a0f7dd38e5368619c432e58b39c1e","981d778c8c9f8666e94174824b6578ee","e14a435e93790938dd7d9cb117ffeb52","4adacf955f929734e4c2c5ee393de21d","ad450d6f30997cbfa14dfc46ff24668d","d4331b5cb1d4dc8a83ce46966593c31d","2df36084c7d6da05aa0251267ab7e770","adbcf9ec0b44551429bc48ac520b2c99","8dae1e153dec9e08ec13a84cac7ce788","d0b28b4f83bc3f6580b52a3b075a762e","319dae5c5825de86a1f376458a79ffca","fc70edda14deb589f28a358f63339c71","6080e28bb19bf450d9d4615d2711de3e","a7c5dd32788aa96a8bac8283b6c7134b","fef40cbba96aa2dd8351ff6cfae3fb92","8d6115e09649389f086b42f2c5bd8687","8ad94dd6975570991ef9685b6b7daa06","0108af72bb4bfd6bd2da1a97f684777f","1d51dbb85ab5914ae1e04b77c3a4ca19","cfcd208495d565ef66e7dff9f98764da","2faab81604933b13dfd9fd2fa3de5bd5","32c74959b06c5d2900609981ad5d0fd0","675d8a836d4f3736519114c9ec98fa65","2a6999f164f9b738bcdd8f240465425a","675d8a836d4f3736519114c9ec98fa65","8823ec5809b0a755924949b04279864d","9231c67b472f6fa27d4661567f235727","eb3568273a40accdafb778a2926cb6b4","b6d81057bfbbc43926cbfcdb784b7a0c","ed43bf6e2228dededc4e1870db95f522","266db12519a9a4eae7ea8e24061c9327","367a68068ace09ad3be22d3653f8529f","ce7135ebff250dfab4985e429faeba69");

$id_array=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,239,240,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259,260,261,262,263,264,265,266,267,268,269,270,271,272,273,274,275,276);
	
	for($i=0;$i<276;$i++)
	{
	
	$this->db2->set('pwd',$hash_array[$i]);
	$this->db2->where('userID',$id_array[$i]);
	$this->db2->update('user');
	}
      }
      
    public function get_apps()
    {
        $this->db->select('*');
        $this->db->from('careers_tb');
        $res=$this->db->get()->result_array();
        return $res;
    }
    
    public function addlead_predata()
    {
        $this->db2->select('*');
        $this->db2->from('district');
        $res['district']=$this->db2->get()->result_array();
        $this->db2->select('*');
        $this->db2->from('state');
        $res['state']=$this->db2->get()->result_array();
        $this->db2->select('*');
        $this->db2->from('country');
        $res['country']=$this->db2->get()->result_array();
        $this->db2->select('*');
        $this->db2->from('class');
        $res['class']=$this->db2->get()->result_array();
        $this->db2->select('*');
        $this->db2->from('course_available');
        $res['course']=$this->db2->get()->result_array();
        $this->db2->select('*');
        $this->db2->from('relationship');
        $res['relationship']=$this->db2->get()->result_array();
        $this->db2->select('*');
        $this->db2->from('syllabus');
        $res['syllabus']=$this->db2->get()->result_array();
        $this->db2->select('*');
        $this->db2->from('country');
        $res['country']=$this->db2->get()->result_array();
        $this->db2->select('*');
        $this->db2->from('source');
        $res['source']=$this->db2->get()->result_array();
        
        return $res;
    }
    public function add_state($country_id,$state_name){
        $d=array('country_id'=>$country_id,'state_name'=>$state_name);
        $this->db2->insert("state",$d);
        return $this->db2->insert_id();
    }
    public function add_district($state_id,$district){
        $d=array('state_id'=>$state_id,'district_name'=>$district);
        $this->db2->insert("district",$d);
        return $this->db2->insert_id();
    }
    public function add_lead($data){
        $this->db2->insert("leads",$data);
    }
      
} 
 
?>