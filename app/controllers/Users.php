<?php
class Users extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function my_account($id)
    {
        $user = $this->userModel->account_info($id);
        $data = [
            'username' => $user->username,
            'email' => $user->email,
            'password' => $user->user_password,
            'usernameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => '',
            'currentPasswordError' => ''
        ];
        $this->view('users/my_account', $data);
    }

    public function edit_my_account($id)
    {
        $user = $this->userModel->account_info($id);
        $data = [
            'username' => $user->username,
            'email' => $user->email,
            'newPassword' => $user->user_password,
            'confirmPassword' => '',
            'usernameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => '',
            'currentPasswordError' => ''
        ];

        if (trim($_POST['username'])) {
            $data['username'] = trim($_POST['username']);
            $nameValidation = "/^[a-zA-Z0-9]*$/";
            //Validate username on letters/numbers
            if (!preg_match($nameValidation, $data['username'])) {
                $data['usernameError'] = 'Name can only contain letters and numbers.';
            }
        }

        if (trim($_POST['email'])) {
            $data['email'] = trim($_POST['email']);
            $nameValidation = "/^[a-zA-Z0-9]*$/";
            //Validate email
            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            } else {
                //Check if email exists.
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['emailError'] = 'Email is already taken.';
                }
            }
        }

        if (trim($_POST['new_password'])) {
            $data['newPassword'] = trim($_POST['new_password']);
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";
            // Validate password on length, numeric values,
            if (strlen($data['newPassword']) < 6) {
                $data['passwordError'] = 'Password must be at least 8 characters';
            } elseif (preg_match($passwordValidation, $data['newPassword'])) {
                $data['passwordError'] = 'Password must be have at least one numeric value.';
            }

            $data['confirmPassword'] = trim($_POST['confirm_password']);
            //Validate confirm password
            if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'Please enter password.';
            } else {
                if ($data['newPassword'] != $data['confirmPassword']) {
                    $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                }
            }
        }

        if (trim($_POST['current_password'])) {
            // Make sure that errors are empty
            if (empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {
                $currentPassword = trim($_POST['current_password']);
                if (password_verify($currentPassword, $user->user_password)) {
                    // Hash newPassword
                    $data['newPassword'] = password_hash($data['newPassword'], PASSWORD_DEFAULT);
                    //Edit user data from model function
                    if ($this->userModel->edit_my_account($data, $id)) {
                        $user = $this->userModel->account_info($id);
                        $data['username'] =  $user->username;
                        $data['email'] =  $user->email;
                        $this->view("users/my_account", $data);
                    } else {
                        die('Something went wrong.');
                    }
                } else {
                    $data['currentPasswordError'] = 'Current password is wrong.';
                }
            }
        } else {
            $data['currentPasswordError'] = 'Please enter the current password.';
        }
        $user = $this->userModel->account_info($id);
        $data['username'] =  $user->username;
        $data['email'] =  $user->email;
        $this->view("users/my_account", $data);
    }

    public function register()
    {
        $data = [
            'username' => '',
            'email' => '',
            'password' => '',
            'confirmPassword' => '',
            'usernameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'usernameError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
            ];

            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            //Validate username on letters/numbers
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter username.';
            } elseif (!preg_match($nameValidation, $data['username'])) {
                $data['usernameError'] = 'Name can only contain letters and numbers.';
            }

            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter email address.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            } else {
                //Check if email exists.
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['emailError'] = 'Email is already taken.';
                }
            }

            // Validate password on length, numeric values,
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter password.';
            } elseif (strlen($data['password']) < 6) {
                $data['passwordError'] = 'Password must be at least 8 characters';
            } elseif (preg_match($passwordValidation, $data['password'])) {
                $data['passwordError'] = 'Password must be have at least one numeric value.';
            }

            //Validate confirm password
            if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'Please enter password.';
            } else {
                if ($data['password'] != $data['confirmPassword']) {
                    $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                }
            }

            // Make sure that errors are empty
            if (empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //Register user from model function
                if ($this->userModel->register($data)) {
                    //Redirect to the login page
                    header('location: ' . URLROOT . '/users/login');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('users/login', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => '',
            ];
            //Validate username
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter a username.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }

            //Check if all errors are empty
            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->userModel->login($data['username'], $data['password']);

                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['passwordError'] = 'Password or username is incorrect. Please try again.';

                    $this->view('users/login', $data);
                }
            }
        } else {
            $data = [
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];
        }
        $this->view('users/login', $data);
    }

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['username'] = $user->username;
        $_SESSION['email'] = $user->email;
        header('location:' . URLROOT . '/pages/index');
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        header('location:' . URLROOT . '/users/login');
    }
    // Manage accounts
    public function manage()
    {
        $results = $this->userModel->manage();
        $this->view('users/manage', $results);
    }
    public function remove($id)
    {
        $this->userModel->remove($id);
        $this->manage();
    }
    public function edit_account($data)
    {
        $data = $this->userModel->account_info($data);
        $this->view('users/edit_account', $data);
    }
    public function edit_user($id)
    {
        $data = [
            'username' => trim($_POST['username']),
        ];
        if ($this->userModel->edit_user($data, $id)) {
            $this->manage();
        } else {
            die('Something went wrong.');
        }
    }
}
