<?php

	namespace App\Http\Livewire\Profile;

	use App\User;
	use Livewire\Component;

	class Edit extends Component
	{
		public $user, $cnic, $city, $state, $country, $postalcode, $gender, $phone, $date_of_birth;

		public function mount()
		{
			$userdata = $this->user = User::where('id', current_user()->id)->first();
			$phoneData = $userdata->phone;
			$this->cnic = $userdata->cnic;
			$this->state = $userdata->state;
			$this->city = $userdata->city;
			$this->country = $userdata->country;
			$this->date_of_birth = $userdata->date_of_birth;
			$this->gender = $userdata->gender;
			$this->postalcode = $userdata->postalcode;
			$this->phone = '0' . $phoneData;
		}

		public function render()
		{
			return view('livewire.profile.edit');
		}

		public function updated($field)
		{

			$this->validateOnly($field, [
				'cnic' => ['unique:users', 'regex:/^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$/'],
				'date_of_birth' => ['before:today'],
				'phone' => ['required', 'regex:/^03[0-9]{9}$/'],
				'gender' => ['required', 'in:male,female,other'],
				'postalcode' => ['required', 'string'],
				'country' => ['required', 'regex:/^[a-zA-Z\s]*$/', 'string'],
				'state' => ['required', 'regex:/^[a-zA-Z\s]*$/', 'string'],
				'city' => ['required', 'regex:/^[a-zA-Z\s]*$/', 'string'],
			]);
			$this->addError('cnic', 'The Correct format is.');
			$this->resetErrorBag('cnic');
		}

		public function submit($id)
		{

			$userData = User::findOrFail($id);
			dd($userData);
			if ($this->cnic == $userData['cnic'] && $this->phone == $userData['phone'] && $this->date_of_birth == $userData['date_of_birth'] && $this->gender == $userData['gender'] && $this->postalcode == $userData['postalcode'] && $this->country == $userData['country'] && $this->state == $userData['state'] && $this->city == $userData['city']) {
				return session()->flash('errors', 'Nothing To Update');
			}
			if ($userData['cnic'] && $userData['date_of_birth'] && $userData['gender'] !== null) {
				$this->validate([
					'cnic' => ['required', 'regex:/^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$/'],
					'date_of_birth' => ['required', 'before:today'],
					'phone' => ['required', 'regex:/^03[0-9]{9}$/'],
					'gender' => ['required', 'in:male,female,other'],
					'postalcode' => ['required', 'string'],
					'country' => ['required', 'regex:/^[a-zA-Z\s]*$/', 'string'],
					'state' => ['required', 'regex:/^[a-zA-Z\s]*$/', 'string'],
					'city' => ['required', 'regex:/^[a-zA-Z\s]*$/', 'string'],
				]);
				$this->phone = trim($this->phone);
				$this->gender = trim($this->gender);
				$this->postalcode = trim($this->postalcode);
				$this->country = trim($this->country);
				$this->state = trim($this->state);
				$this->city = trim($this->city);
				$userData->update([
					'cnic' => $userData['cnic'],
					'date_of_birth' => $userData['date_of_birth'],
					'phone' => $this->phone,
					'gender' => $userData['gender'],
					'postalcode' => $this->postalcode,
					'country' => $this->country,
					'state' => $this->state,
					'city' => $this->city,
				]);
				return session()->flash('success', 'Profile Updated Successfully!');
			} else {
				$this->validate([
					'cnic' => ['required', 'unique:users', 'regex:/^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$/'],
					'date_of_birth' => ['required', 'before:today'],
					'phone' => ['required', 'regex:/^03[0-9]{9}$/'],
					'gender' => ['required', 'in:male,female,other'],
					'postalcode' => ['required', 'string'],
					'country' => ['required', 'regex:/^[a-zA-Z\s]*$/', 'string'],
					'state' => ['required', 'regex:/^[a-zA-Z\s]*$/', 'string'],
					'city' => ['required', 'regex:/^[a-zA-Z\s]*$/', 'string'],
				]);

				$this->cnic = trim($this->cnic);
				$this->date_of_birth = trim($this->date_of_birth);
				$this->phone = trim($this->phone);
				$this->gender = trim($this->gender);
				$this->postalcode = trim($this->postalcode);
				$this->country = trim($this->country);
				$this->state = trim($this->state);
				$this->city = trim($this->city);
				$userData->update([
					'cnic' => $this->cnic,
					'date_of_birth' => $this->date_of_birth,
					'phone' => $this->phone,
					'gender' => $this->gender,
					'postalcode' => $this->postalcode,
					'country' => $this->country,
					'state' => $this->state,
					'city' => $this->city,
				]);
				return session()->flash('success', 'Profile Updated Successfully!');
			}

		}

	}
