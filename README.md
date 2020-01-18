# IS_ImageClassification
An image classification project for Intelligent Systems course by Andrew Ko, Weku Brian, and Fio Ambadar.

This Python 3 project is an image classifier which is developed to enable identification of local images in local directories or newly added ones in the built website.

Details about the project including background problem, solutions implemented, software requirements, etc is available in the presentation slides link: https://docs.google.com/presentation/d/16GAJspvOsCz91PrV0kVjamDSglGRUP_7YOKMuDfrTdc/edit?usp=sharing

The data set is available at: https://drive.google.com/open?id=1fH2hRU1RvxE8mPZmFxFzWlfiIwYOoWBA

As an improvement upon our initial version of the project, which only used 1 trained model with 5 hidden layers of 32, 64, 128, 64, and 32 nodes respectively, we tested out the effects of some changes. These changes include:

1. Adding number of hidden layers
2. Changing the activation function for all hidden layers
3. Adding number of nodes in hidden layers

We have found that Linear activation function is the best out of all the other activation functions because it's loss is shown to be the lowest via TensorBoard.

Further improvements on this project would be:

1. Adding more data sets to improve the deep learning aspect of the models.
2. Improve and use existing code into an Image Detector.

In order to run TensorBoard, use the following in command line: tensorboard --logdir:"PATH_TO_LOG_DIRECTORY"
